<?php

//require the two three files (classes) within the core directory.
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';


//require the two controller files (classes) within the controller directory.
require_once 'controllers/home.php';
require_once 'controllers/users.php';

//require the two models files (classes) within the model directory.
require_once 'models/home.php';
require_once 'models/user.php';




//creates a new app, instance. App.php
$app = new App($_GET);
//create variable called controller
$controller = $app->createController();
if($controller){
    $controller->executeAction();
}
