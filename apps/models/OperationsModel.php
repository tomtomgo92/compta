<?php

require _MODELS . '/PDOModel.php';

class OperationsModel extends PDOModel {
    public function __construct($host, $dbName, $login, $password) {
        parent::__construct($host, $dbName, $login, $password);
    }

    public function createOperation($user_id, $account_id, $amount, $category_id, $payment_method, $comment) {
        // Insert the new operation
        $q = "INSERT INTO operations (idAccount, `date`, idUser, amount, idCategory, paymentMethod, comment) VALUES (:accountId, NOW(), :userId, :amount, :categoryId, :paymentMethod, :comment)";
        $this->request($q, array(
                                    "userId" => $user_id,
                                    "amount" => (float) $amount,
                                    "accountId" => (int) $account_id,
                                    "categoryId" => (int) $category_id,
                                    "paymentMethod" => $payment_method,
                                    "comment" => $comment
                                 ));
        
        // Update the account
        $q = "UPDATE accounts SET accountProvision = accountProvision + (SELECT (CASE c.typeCat WHEN 'credit' THEN o.amount ELSE o.amount * -1 END ) FROM operations o, category c WHERE o.idUser = :userId AND c.id = o.idCategory ORDER BY `date` DESC LIMIT 1) WHERE idUser = :userId;";
        $this->request($q, array(
                            "userId" => $user_id
                           ));
        
    }

    public function editOperation ($opId, $account_id, $amount, $category_id, $payment_method, $comment) {
        $q = "UPDATE operations SET amount = (amount - (SELECT amount WHERE id = :opId)) + :amount, idAccount = :accountId, idCategory = :categoryId, paymentMethod = :paymentMethod, comment = :comment WHERE id = :opId;";
        $this->request($q, array(
                                "opId" => (int) $opId,
                                "amount" => (float) $amount,
                                "accountId" => (int) $account_id,
                                "categoryId" => (int) $category_id,
                                "paymentMethod" => $payment_method,
                                "comment" => $comment
                            ));
    }

    public function deleteOperation($opId) {
        $q = "DELETE FROM operations WHERE id = :opId;";
        $this->request($q, array("opId" => $opId));
    }

    public function getOperationList($user_id, $account_id) {
        $q = "SELECT o.id, o.comment, o.idAccount, a.label, o.date, c.name, o.amount, o.idCategory, o.paymentMethod FROM operations o, category c, accounts a WHERE o.idCategory = c.id AND o.idUser = 1 AND o.idAccount = 8 ORDER BY o.date DESC";
        return $this->select($q, array(
                                    "userId" => (int) $user_id,
                                    "accountId" => (int) $account_id
                                  ));
    }   

    public function getPaymentMethods () {
        $q = "SELECT SUBSTR(COLUMN_TYPE, 5) AS pay FROM information_schema.`COLUMNS` WHERE TABLE_NAME = 'operations' AND COLUMN_NAME = 'paymentMethod';";
        return $this->select($q)->rows;
    }
}