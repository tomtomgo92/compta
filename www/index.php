<?php
define('_ROOT', realpath(__DIR__ . '/../'));
define('_APPS', _ROOT . '/apps/');
define('_PUBLIC', _ROOT . '/www/');
define('_VIEWS', realpath(_APPS . '/views/'));

session_start();
$_SESSION['idUser'] = 1;
$_SESSION['idAccount'] = 8;

require _APPS . 'config/config.php';

/* Include the page if it is defined */
if (isset($view)) {
    include _VIEWS . '/common/Head.php';
    include _VIEWS . '/common/Header.php';
    include $view;
    include _VIEWS . '/common/Footer.php';
    include _VIEWS . '/common/ScriptInclude.php';
}
