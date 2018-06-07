<?php
require _MODELS . '/AccountsModel.php';

$db = new AccountsModel(
    $ini->host, 
    $ini->dbName, 
    $ini->dbUsername, 
    $ini->dbPassword
);
