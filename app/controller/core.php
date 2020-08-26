<?php
$path = $_SERVER['SCRIPT_NAME'];


switch ($path) {
    case ROOT_PAGE.'index.php':
    $view = "index";
    break;

    case ROOT_PAGE.'register/index.php':
    $view = "../../app/views/register/index.php";
    break;

    default:
        $view = "default";
        break;

}

