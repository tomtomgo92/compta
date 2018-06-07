<?php

require _MODELS . '/PDOModel.php';

class OperationsModel extends PDOModel
{
    public function __construct($host, $dbName, $login, $password)
    {
        parent::__construct($host, $dbName, $login, $password);
    }

    public function createOperation($user_id, $account_id, $amount, $category_id, $payment_method, $comment)
    {
        // Insert the new operation
        $q = "INSERT INTO operations (idAccount, `date`, idUser, amount, idCategory, paymentMethod, comment) VALUES (:accountId, NOW(), :userId, :amount, :categoryId, :paymentMethod, :comment)";
        $this->request($q, array(
            "userId" => $user_id,
            "amount" => (float) $amount,
            "accountId" => (int) $account_id,
            "categoryId" => (int) $category_id,
            "paymentMethod" => $payment_method,
            "comment" => $comment,
        ));

        // Update the account
        $q = "UPDATE accounts SET accountProvision = accountProvision + (SELECT (CASE c.typeCat WHEN 'credit' THEN o.amount ELSE o.amount * -1 END ) FROM operations o, category c WHERE o.idUser = :userId AND c.id = o.idCategory ORDER BY `date` DESC LIMIT 1) WHERE idUser = :userId AND id = :idAccount;";
        $this->request($q, array(
            "userId" => $user_id,
            "idAccount" => $account_id,
        ));

    }

    public function editOperation($opId, $account_id, $amount, $category_id, $payment_method, $comment) {
        $q = "UPDATE accounts SET accountProvision = accountProvision - (SELECT (CASE c.typeCat WHEN 'credit' THEN o.amount ELSE o.amount * -1 END ) FROM operations o, category c WHERE o.id = :idOp AND c.id = o.idCategory ORDER BY `date` DESC LIMIT 1) WHERE id = :idAccount;";
        /* print_r($this->request($q, array( "idOp" => $opId, "idAccount" => $account_id)));
        exit; */
        if ($this->request($q, array( "idOp" => $opId, "idAccount" => $account_id))) {
            $q = "UPDATE operations SET amount = (amount - (SELECT amount WHERE id = :opId)) + :amount, idAccount = :accountId, idCategory = :categoryId, paymentMethod = :paymentMethod, comment = :comment WHERE id = :opId;";
            if ($this->request($q, array( "opId" => (int) $opId, "amount" => (float) $amount, "accountId" => (int) $account_id, "categoryId" => (int) $category_id, "paymentMethod" => $payment_method, "comment" => $comment ))) {
                $q = "UPDATE accounts SET accountProvision = accountProvision + (SELECT (CASE c.typeCat WHEN 'credit' THEN o.amount ELSE o.amount * -1 END ) FROM operations o, category c WHERE o.id = :idOp AND c.id = o.idCategory ORDER BY `date` DESC LIMIT 1) WHERE id = :idAccount;";
                return $this->request($q, array(
                    "idOp" => (int) $opId,
                    "idAccount" => (int) $account_id
                ));
            }
        }
    }

    public function deleteOperation($opId, $accountId) {
        $q = "UPDATE accounts SET accountProvision = accountProvision - (SELECT (CASE c.typeCat WHEN 'credit' THEN o.amount ELSE o.amount * -1 END ) FROM operations o, category c WHERE o.id = :idOp AND c.id = o.idCategory ORDER BY `date` DESC LIMIT 1) WHERE id = :idAccount;";
        if ($this->request($q, array("idOp" => $opId, "idAccount" => $accountId))) {
            $q = "DELETE FROM operations WHERE id = :opId;";
            return $this->request($q, array("opId" => $opId));
        }
        return false;
    }

    public function getOperationList($user_id, $account_id)
    {
        $q = "SELECT o.id, o.comment, o.idAccount, a.label, o.date, c.name, (SELECT (CASE c.typeCat WHEN 'credit' THEN CONCAT('+', o.amount) ELSE o.amount * -1 END ) WHERE o.idUser = :userId AND c.id = o.idCategory ORDER BY `date` DESC LIMIT 1) amount, o.idCategory, o.paymentMethod FROM operations o JOIN category c ON o.idCategory = c.id JOIN accounts a ON o.idAccount = a.id WHERE a.idUser = :userId AND a.id = :accountId;";
        return $this->select($q, array(
            "userId" => (int) $user_id,
            "accountId" => (int) $account_id,
        ));
    }

    public function getPaymentMethods()
    {
        return $this->getEnum('operations', 'paymentMethod');
    }
}
