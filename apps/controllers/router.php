<?php

$page = $url_array[0];

switch ($page) {
    case 'dashboard':
        include "DashboardController.php";
        $view = _VIEWS . '/Dashboard.php';
        break;
    
    /* Account */
    case 'createaccount':
        include 'CreateAccountController.php';
        $view = _VIEWS . '/CreateAccount.php';
        break;
    case 'editaccount':
        include 'EditAccountController.php';
        $view = _VIEWS . '/EditAccount.php';
        break;
    case 'deleteaccount':
        include 'DeleteAccountController.php';
        break;
    /*  */

    /* Make operation */
    case "newoperation":
        include "CreateOperationController.php";
        break;
    case 'editoperation':
        include 'EditOperationController.php';
        $view = _VIEWS . '/EditOperation.php';
        break;
    case 'deleteoperation':
        include 'DeleteOperationController.php';
        break;
    /*  */

    /* default:
        $view = _VIEWS . '/HomePage.php';
        break; */
}
