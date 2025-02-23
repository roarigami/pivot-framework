<?php
namespace Pivot\Database\Migrations;
class UsersTable

{

    public static function createUserTable($dbc) {
      try {
          $userQuery = "CREATE TABLE IF NOT EXISTS `pivotdb`.`users` ( `id` BIGINT(19) NOT NULL AUTO_INCREMENT ,
            `username` VARCHAR(64) NOT NULL UNIQUE,
            `firstname` VARCHAR(64) NOT NULL,
            `lastname` VARCHAR(64) NOT NULL,
            `email` VARCHAR(64) NOT NULL UNIQUE,
            `password` VARCHAR(64) NOT NULL,
            `profileimage` TEXT NOT NULL,
            `join_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`user_id`)) ENGINE = InnoDB;";

            $stmnt = $dbc->prepare($userQuery);
            $stmnt->execute();

      } catch(\Throwable $th) {
        die($th->getMessage());
      }
    }

}
