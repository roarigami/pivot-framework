<?php
use Root\Database\{Database};
use Pivot\src\core\Router;

//Pivot System Initiation
include "bootstrap.php";

//Manually Set timezone
date_default_timezone_set('America/Toronto');


require VIEW_PATH . 'home.php';

$router = new Router;
$router->define([
  '' => "Controller/index.php",
  'about' => "Controller/about.php"
]);
