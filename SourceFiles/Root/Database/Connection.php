<?php
declare(strict_types=1);

//Database connection
namespace Root\Database;
class Connection

{

  try {
      return new PDO("mysql:host=127.0.0.1;dbname=pivotdb", 'root', '');
  } catch (\Throwable $th) {
    die($th->getMessage());
  }


}
