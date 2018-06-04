<?php
define('_ROOT', realpath(__DIR__.'/../'));
define('_APPS', _ROOT.'/apps/');
define('_VIEWS', realpath(_APPS.'/views/'));

require _APPS.'config/config.php';

/* Include the page */
include _VIEWS . '/common/Head.php';
include _VIEWS . '/common/Header.php';
include $view;
include _VIEWS . '/common/Footer.php';
include _VIEWS . '/common/FileInclude.php';