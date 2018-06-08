<?php

require_once _MODELS . '/PDOModel.php';

class AccountsModel extends PDOModel {
    public function __construct($host, $dbName, $login, $password) {
        parent::__construct($host, $dbName, $login, $password);
    }

    public function createAccount($userId, $accountType, $provision, $currency, $label) {
        $q = "INSERT INTO accounts (idUser, accountType, accountProvision, currency, label) VALUES (:userId, :accountType, :accountProvision, :currency, :label)";
        return $this->request($q, array(
                                    "userId" => $userId,
                                    "accountType" => $accountType,
                                    "accountProvision" => $provision,
                                    "currency" => $currency,
                                    "label" => $label
                                 ));
    }

    public function editAccount($accountId, $accountType, $provision, $currency, $label) {
        $q = "UPDATE accounts SET accountType = :accountType, accountProvision = :accountProvision, currency = :currency, label = :label WHERE id = :accountId;";        
        return $this->request($q, array(
                                    "accountId" => (int) $accountId,
                                    "accountType" => $accountType,
                                    "accountProvision" => (float) $provision,
                                    "currency" => $currency,
                                    "label" => $label
                                  ));    
    }

    public function deleteAccount($accountId) {
        $q = "DELETE FROM operations WHERE idAccount = :idAccount";
        if ($this->request($q, array( "idAccount" => $accountId ))) {
            $q = "DELETE FROM `accounts` WHERE id = :idAccount";
            return $this->request($q,array(
                                        "idAccount" => $accountId
                                     ));
        }
    }

    public function accountList($userId) {
        $q = "SELECT * FROM accounts WHERE idUser = :userId";
        return $this->select($q, array(
                                    "userId" => $userId
                                  ));
    }

    public function getAccount($accountId) {
        $q = "SELECT * from accounts WHERE id = :accountId LIMIT 1";
        return $this->select($q, array(
                                        "accountId" => $accountId 
                                    ));
    }

    public function accountCount($userId) {
        $q = "SELECT COUNT(*) FROM accounts WHERE idUser = :userId";
        return $this->select($q, array(
                                    "userId" => $userId
                                  ));
    }

    public function chart($date) {
        $q = "SELECT date FROM operations ORDER BY date>DATE_FORMAT(NOW(),'%m%d')";
        return $this->select($q, array(
                                        "userId" => $userId
                                    ));
    }

}