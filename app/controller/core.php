<?php
$path = $_SERVER['SCRIPT_NAME'];


switch ($path) {
    case ROOT_PAGE.'index.php':
        $CURRENT_PAGE = "Home";
        $view = "../app/views/home/index.php";
    break;

    case ROOT_PAGE.'register/index.php':
        $CURRENT_PAGE = "Register";

        $view = "../../app/views/register/index.php";
    break;

    default:
        $CURRENT_PAGE = "404";

        $view = "../../app/views/404.php";
        break;

}

