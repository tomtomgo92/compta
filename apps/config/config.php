<?php
/* setup different path */
define('_CONFIG', realpath(__DIR__));
define('_LIBS', realpath(_APPS.'/lib/'));
define('_CONTROLLERS', realpath(_APPS.'/controllers/'));
define('_MODELS', realpath(_APPS.'/models/'));

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url_array = explode('/', $_SERVER['REQUEST_URI']);
array_splice($url_array, 0, 1);

$ini = (object) parse_ini_file(_CONFIG . '/config.ini');

include _CONTROLLERS.'/router.php';