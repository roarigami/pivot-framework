<?php
namespace GenFrame\Database\Migrations;
class PostsTable

{

    public static function createPostTable($dbc) {
      try {
          $postQuery = "CREATE TABLE IF NOT EXISTS `crud`.`posts` ( `id` BIGINT(19) NOT NULL AUTO_INCREMENT ,
            `title` VARCHAR(64) NOT NULL,
            `slug` VARCHAR(64) NOT NULL UNIQUE,
            `body` TEXT NOT NULL,
            `postimage` TEXT NOT NULL,
            `is_published` TINYINT(1) NOT NULL,
            `date_posted` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`post_id`)) ENGINE = InnoDB;";


            $stmnt = $dbc->prepare($postQuery);
            $stmnt->execute();

      } catch(\Throwable $th) {
        die($th->getMessage());
      }
    }


}
