<?php

session_start(); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'app/core/App.php';
require_once 'app/core/Controller.php';
require_once 'app/core/config.php';
require_once 'app/core/database.php';

$app = new App();
