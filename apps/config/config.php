<?php
/* setup different path */
define('_CONFIG', realpath(__DIR__));
define('_PUBLIC', _ROOT . '/www/');
define('_VIEWS', realpath(_APPS . '/views/'));
define('_CONTROLLERS', realpath(_APPS.'/controllers/'));
define('_MODELS', realpath(_APPS.'/models/'));
define('_LIBS', realpath(_APPS.'/lib/'));

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url_array = explode('/', $_SERVER['REQUEST_URI']);
array_splice($url_array, 0, 1);

$ini = (object) parse_ini_file(_CONFIG . '/config.ini');

require_once _CONTROLLERS . '/LoginController.php';

include _CONTROLLERS.'/router.php';


if (!(isset($_SESSION) && !empty($_SESSION))) {
    header('Location: /home');
}

/* Include the page if it is defined */
if (isset($view)) {
    include _VIEWS . '/common/Head.php';
    include _VIEWS . '/common/Header.php';
    include $view;
    include _VIEWS . '/common/Footer.php';
    include _VIEWS . '/common/ScriptInclude.php';
}
