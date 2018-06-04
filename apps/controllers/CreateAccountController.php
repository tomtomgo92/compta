<?php
require_once _MODELS . '/AccountsModel.php';

$res = false;
if (isset($_POST['createAccountForm'])) {
    if (!empty($_POST['accountType']) && !empty($_POST['provision']) && !empty($_POST['currency'])) {
        $db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
        if ($db->accountCount(1)->size < 10) {
            $res = $db->createAccount(1, $_POST['accountType'], $_POST['provision'], $_POST['currency']);
        }
    }
}