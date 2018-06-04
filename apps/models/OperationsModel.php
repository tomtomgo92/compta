<?php

require _MODELS . '/PDOModel.php';

class OperationsModel extends PDOModel {
    public function __construct($host, $dbName, $login, $password) {
        parent::__construct($host, $dbName, $login, $password);
    }

    public function createOperation($user_id, $account_id, $amount, $category_id, $payment_method) {
        $q = "INSERT INTO operations (idUser, amount, idCategory, paymentMethod) VALUES (:userId, :amount, :categoryId, :paymentMethod)";
        return $this->request($q, array(
                                    "userId" => $user_id,
                                    "amount" => $amount,
                                    "categoryId" => $category_id,
                                    "paymentMethod" => $payment_method
                                 ));
}