<?php

$page = $url_array[0];

switch ($page) {
    
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
    case 'dashboard':
        include 'AccountListController.php';
        $view = _VIEWS . '/AccountList.php';
        break;
    case 'accountpage':
        include "DashboardController.php"; // Fichier à renommer
        $view = _VIEWS . '/Dashboard.php'; // Fichier à renommer
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
        
        case 'home':
        include 'LoginController.php';
        $view = _VIEWS . '/HomePage.php';
        break;
    
    case 'logout':
        session_destroy();
        header('Location: /home');
        exit;
        break;

    /* default:
        header('Location: /home');
        break;  */
}
