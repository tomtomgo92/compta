<?php
require_once _MODELS . '/AccountsModel.php';

if (isset($_GET['idaccount'])) {
    $db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
    $db->deleteAccount($_GET['idaccount']);
}

header('Location: /dashboard');