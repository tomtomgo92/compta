<?php
require _MODELS . '/AccountsModel.php';

$db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);

if (isset($_POST['editAccountForm'])) {
    if (!empty($_SESSION['idUser']) && !empty($_POST['account']) && !empty($_POST['accountType']) && !empty($_POST['provision']) && !empty($_POST['currency'])) {
        var_dump($db->editAccount($_POST['account'], $_POST['accountType'], $_POST['provision'], $_POST['currency']));
    }
}

$accountList = $db->accountList($_SESSION['idUser'])->rows;
