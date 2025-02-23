<?php
declare(strict_types=1);

//Database connection
namespace Root\Database;
class Connection

{

  public static function make($config) {
    try {
        return new PDO(
          'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
          $config['user'],
          $config['password']
        );
    } catch (\Throwable $th) {
      die($th->getMessage());
    }
  }


}
