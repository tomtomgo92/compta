<?php

require_once _MODELS . '/AccountsModel.php';

$list = null;

if (isset($_POST['accountByUserForm'])) {
    if (!empty($_POST['userId'])) {
    }
}
$db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
$accounts = $db->accountList($_SESSION['idUser'])->rows;