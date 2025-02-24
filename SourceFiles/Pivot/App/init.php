<?php
use Root\Database\{Database};
use Pivot\src\core\Router;

//Pivot System Initiation
include "bootstrap.php";

//Manually Set timezone
date_default_timezone_set('America/Toronto');

//var_dump(substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1));
$uri = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1);
//var_dump($uri);

$router = new Router;
require ROOT_PATH . 'Config/routes.php';

require $router->show($uri);
