<?php
require _MODELS . "/OperationsModel.php";

if (isset($_POST['addOpBtn'])) {
    if (!empty($_SESSION['idUser']) && !empty($_POST['idAccount']) && !empty($_POST['comment']) && !empty($_POST['idCategory']) && !empty($_POST['paymentMethod']) && !empty($_POST['amount'])) {
        $db = new OperationsModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
        $db->createOperation($_SESSION['idUser'], $_POST['idAccount'], $_POST['amount'], $_POST['idCategory'], 'blue card', $_POST['comment']);
        header('Location: /dashboard');
    }
}