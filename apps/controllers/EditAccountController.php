<?php
require _MODELS . '/AccountsModel.php';

$db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);

if (isset($_POST['editAccountForm'])) {
    if (!empty($_POST['idUser']) && !empty($_POST['accountId']) && !empty($_POST['accountType']) && !empty($_POST['provision']) && !empty($_POST['currency'])) {
        if ($db->accountCount($_POST['idUser'])->size < 10) {
            $db->editAccount($_POST['idUser'], $_POST['accountId'], $_POST['accountType'], $_POST['provision'], $_POST['currency']);
        }
    }
}

$accountList = $db->accountList($_SESSION['idUser'])->rows;
