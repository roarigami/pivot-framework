<?php
declare(strict_types=1);

//Page router
namespace Pivot\src\core;
class Router

{

  protected $routes = [];

  public function define($routes) {
    $this->routes = $routes;
  }

}
