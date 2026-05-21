<?php
//Pivot System Initiation
include "bootstrap.php";

use Root\Database\{Database};
use Pivot\src\core\Router;
use Pivot\src\core\Request;



//Manually Set timezone
date_default_timezone_set('America/Toronto');

// var_dump(substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1));
//var_dump(trim($_SERVER['REQUEST_URI'], '/'));
//var_dump(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
// $req = new Request;
// $uri = $req->uri();
// $uri = Request::uri();
// var_dump($uri);

// $router = new Router;
// require ROOT_PATH . 'Config/routes.php';
//
// require $router->show(Request::uri());



$routes = ROOT_PATH . 'Config/routes.php';
require Router::load($routes)
->show(Request::uri());
