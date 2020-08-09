<?php
//require the two core files (classes) within the core directory.
require_once 'core/App.php';
require_once 'core/Controller.php';
//creates a new app, instance. App.php
$app = new App($_GET);
//create variable called controller
$controller = $app->createController();
