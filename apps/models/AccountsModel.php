<?php

require_once _MODELS . '/PDOModel.php';

class AccountsModel extends PDOModel {
    public function __construct($host, $dbName, $login, $password) {
        parent::__construct($host, $dbName, $login, $password);
    }

    public function createAccount($userId, $accountType, $provision, $currency) {
        $q = "INSERT INTO accounts (idUser, accountType, accountProvision, currency) VALUES (:userId, :accountType, :accountProvision, :currency)";
        return $this->request($q, array(
                                    "userId" => $userId,
                                    "accountType" => $accountType,
                                    "accountProvision" => $provision,
                                    "currency" => $currency
                                 ));
    }

    public function editAccount($userId, $accountId, $accountType, $provision, $currency) {
        $q = "UPDATE accounts SET accountType = :accountType, accountProvision = :accountProvision, currency = :currency, idUser = :idUser WHERE id = :accountId";
        return $this->request($q, array(
                                    "accountId" => $accountId,
                                    "accountType" => $accountType,
                                    "accountProvision" => $provision,
                                    "currency" => $currency,
                                    "idUser" => $userId
                                  ));    
    }

    public function deleteAccount($accountId) {
        $q = "DELETE FROM `accounts` WHERE id = :idAccount";
        return $this->request($q, array(
                                    "idAccount" => $accountId
                                  ));
    }

    public function accountList($userId) {
        $q = "SELECT * FROM accounts WHERE idUser = 1";
        return $this->select($q, array(
                                    "userId" => $userId
                                  ));
    }

    public function accountCount($userId) {
        $q = "SELECT COUNT(*) FROM accounts WHERE idUser = :userId";
        return $this->select($q, array(
                                    "userId" => $userId
                                  ));
    }
}