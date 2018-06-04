<?php

$page = $url_array[0];

switch ($page) {
    case 'dashboard':
        $view = _VIEWS . '/Dashboard.php';
        break;
    
    /* Account Creation */
    case 'createaccount':
        include 'CreateAccountController.php';
        $view = _VIEWS . '/CreateAccount.php';
        break;
    case 'editaccount':
        include 'EditAccountController.php';
        $view = _VIEWS . '/EditAccount.php';
        break;
    /*  */

    /* Make operation */
    case "newoperation":

        break;
    /*  */

    /* default:
        $view = _VIEWS . '/HomePage.php';
        break; */
}
