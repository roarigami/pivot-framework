<?php
declare(strict_types=1);

//Page router
namespace Pivot\src\core;
class Request

{

  public static function uri() {
      return substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1);
      //return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }

}
