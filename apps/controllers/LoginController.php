<?php
require_once _MODELS . '/UsersModel.php';

$userdb = new UsersModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword); 
($userdb->authenticate(/* $_POST['email'] */ 'thomas.guillouet@thatmuch.fr' , /* $_POST['password'] */ '17tg11J59' ));

var_dump($_SESSION);
exit;