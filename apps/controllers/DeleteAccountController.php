<?php
require_once _MODELS . '/AccountsModel.php';

if (isset($_GET['deleteAccountBtn']) && $_GET['deleteAccountBtn'] == 1) {
    $db = new AccountsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
    $db->deleteAccount($_GET['id']);
}