<?php
require_once _MODELS . '/UsersModel.php';

<<<<<<< HEAD
$db->authenticate($_POST['email'], $_POST['password']);
=======
$userdb = new UsersModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword); 
($userdb->authenticate(/* $_POST['email'] */ 'thomas.guillouet@thatmuch.fr' , /* $_POST['password'] */ '17tg11J59' ));

/* var_dump($_SESSION);
exit; */
>>>>>>> 3b3d09d122bc197c68afebdec2bba41572e129f3
