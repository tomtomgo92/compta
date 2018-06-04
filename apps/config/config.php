<?php
/* setup different path */
define('_CONFIG', realpath(__DIR__));
define('_LIB', realpath(_APPS.'/library/'));
define('_CONTROLLERS', realpath(_APPS.'/controllers/'));
define('_MODELS', realpath(_APPS.'/models/'));

$url_array = explode('/', $_SERVER['REQUEST_URI']);
unset($url_array[0]);

$ini = (object) parse_ini_file(_CONFIG . '/config.ini');

include _CONTROLLERS.'/router.php';