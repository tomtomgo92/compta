<?php
require _MODELS . "/OperationsModel.php";

$db = new OperationsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);

$db->deleteOperation($_GET['id']);

header('Location: /dashboard/?accountId='.$_SESSION['idAccount']);
exit;