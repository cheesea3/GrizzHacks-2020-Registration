<?php
//this is where users will land on

//requires initialization file stored within app. not necessary but good to separate.
//This file requires all the core components that we'll need.
require_once '../app/init.php';

//creates a new app, instance. So basically the require_once above reads init.php and then that file reads App.php
$app = new App;

