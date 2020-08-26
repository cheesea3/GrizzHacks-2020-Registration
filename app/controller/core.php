<?php
$path = $_SERVER['SCRIPT_NAME'];


switch ($path) {
    case "3":
    echo "rwrw";
    break;

    default:
        echo $path;
        break;

}
