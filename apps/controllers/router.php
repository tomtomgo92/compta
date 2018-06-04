<?php

$page = $url_array[1];

switch ($page) {
    case 'dashboard':
        $view = _VIEWS . '/Dashboard.php';
        break;
    
    default:
        $view = _VIEWS . '/HomePage.php';
        break;
}