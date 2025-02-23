<?php
use Root\Database\{Database};
use Pivot\src\core\Router;

//Pivot System Initiation
include "bootstrap.php";

//Manually Set timezone
date_default_timezone_set('America/Toronto');

//$uri = trim($_SERVER['REQUEST_URI'], '/');
//var_dump(trim($_SERVER['REQUEST_URI'], '/'));

$router = new Router;
require ROOT_PATH . 'Config/routes.php';

require $router->show('');
