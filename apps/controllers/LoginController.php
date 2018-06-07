<?php
require_once _MODELS . '/UsersModel.php';

$userdb = new UsersModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword); 
if (isset($_POST['signinForm'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $userdb->authenticate($_POST['email'] , $_POST['password']);
        if (!empty($_SESSION) && isset($_SESSION['email'])) {
            header('Location: /dashboard');
            exit;
        } else {
            header('Location: /home');
            exit;
        } 
    }
}

/* var_dump($_SESSION);
exit;
 */
/* if (!empty($_SESSION) && isset($_SESSION['email'])) {
    header('Location: /dashboard/'.$_SESSION['']);
    exit;
} else {
    header('Location: /home');
    exit;
} */
