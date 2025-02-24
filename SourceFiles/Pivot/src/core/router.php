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

  public function show($uri) {
      if(array_key_exists($uri, $this->routes)) {
          return $this->routes[$uri];
      }
  }

}
