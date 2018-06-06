<?php
define('_ROOT', realpath(__DIR__ . '/../'));
define('_APPS', _ROOT . '/apps/');
define('_PUBLIC', _ROOT . '/www/');
define('_VIEWS', realpath(_APPS . '/views/'));

session_start();
$_SESSION['idUser'] = 1;

require _APPS . 'config/config.php';

require _MODELS . '/UsersModel.php';
/* $db = new UsersModel($ini->host, $ini->dbName, $ini->dbUsername, $ini->dbPassword);
//$db->createUser('TGuillouet', 'Thomas', 'Guillouet', 'thomas.guillouet@thatmuch.fr', '17tg11J59');

var_dump($db->authenticate('thomas.guillouet@thatmuch.fr', '17tg11J59'));
exit; */

if (!(isset($_SESSION) && !empty($_SESSION))) {
    header('Location: /signin');
}

/* Include the page if it is defined */
if (isset($view)) {
    include _VIEWS . '/common/Head.php';
    include _VIEWS . '/common/Header.php';
    include $view;
    include _VIEWS . '/common/Footer.php';
    include _VIEWS . '/common/ScriptInclude.php';
}
