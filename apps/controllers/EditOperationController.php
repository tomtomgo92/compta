<?php
require _MODELS . "/OperationsModel.php";
require _MODELS . "/CategoriesModel.php";

$db = new OperationsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
$catdb = new CategoriesModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);

if (isset($_POST['editOperationForm'])) {
    if (!empty($_POST['opId']) && !empty($_POST['accountId']) && !empty($_POST['amount']) && !empty($_POST['categoryId']) && !empty($_POST['paymentMethod']) && !empty($_POST['comment'])) {
        $db->editOperation($_POST['opId'], $_POST['accountId'], $_POST['amount'], $_POST['categoryId'], $_POST['paymentMethod'], $_POST['comment']);
        header('Location: /dashboard');
    }
}

/* Get all categories */
$categories = $catdb->getCategories()->rows;

/* Get payment methods */
$paymentMethods = $db->getPaymentMethods();

/* $m = array();
preg_match_all("/([^'^(^)^,]+)/", $paymentMethods[0]->pay, $m); // To take only the name of the payment method
unset($m[1]); */