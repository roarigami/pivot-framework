<?php
declare(strict_types=1);

//Page router
namespace Pivot\src\core;

use \Exception;
class Router

{

  protected $routes = [];

  public function define($routes) {
      $this->routes = $routes;
  }

  public static function load($file) {

      $router = new static;
      require $file;
      return $router;

  }

  public function show($uri) {
      if(array_key_exists($uri, $this->routes)) {
          return $this->routes[$uri];
      }
      throw new Exception('Route not found');
  }

}
