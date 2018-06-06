<?php
require_once _MODELS . '/AccountsModel.php';

$res = false;
if (isset($_POST['createAccountForm'])) {
    //  createAccount($userId, $accountType, $provision, $currency, $label)
    if (!empty($_POST['accountType']) && !empty($_POST['provision']) && !empty($_POST['currency'])) {
        $db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
        if ($db->accountCount($_SESSION['idUser'])->size < 10) {
            //var_dump(array($_SESSION['idUser'], $_POST['accountType'], $_POST['provision'], $_POST['currency'], $_POST['label']));  
            $res = $db->createAccount($_SESSION['idUser'], $_POST['accountType'], $_POST['provision'], $_POST['currency'], $_POST['label']);
        }
    }
}