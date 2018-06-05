<?php

require _MODELS . "/OperationsModel.php";
require_once _MODELS . '/AccountsModel.php';

$db = new OperationsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
$acdb = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);

/* Get all operations of the user for the currenly selected account */
$operations = $db->getOperationList($_SESSION['idUser'], $_SESSION['idAccount']);

/* Get payment methods and transform the string into an array */
$paymentMethods = $db->getPaymentMethods();
$m = array();
preg_match_all("/([^'^(^)^,]+)/", $paymentMethods[0]->pay, $m); // To take only the name of the payment method
unset($m[1]);

/* Get all accounts of the user */
$accounts = $acdb->accountList($_SESSION['idUser'])->rows;