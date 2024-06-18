<?php
declare(strict_types=1);

//Database connection
namespace Pivot\src\core;
final class Database

{

//private  $host = "127.0.0.1";<--Local host address
  private $host = "localhost";
  private $user = "root";
  private $password = "";
  private $database = "pivotdb";//Pivot Database

  private static $instance = null;
  private static $connection;

    //mysqli connection instance
    // protected function connect() {
    //   $db = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    //   return $db;
    // }

    //pdo connection instance
    protected function connect() {
      $dsn = 'mysql:host='.$this->host.';dbname='.$this->database;
      $dbControl = new \PDO($dsn, $this->user, $this->password);
      $dbControl->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
      //$dbControl->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      //$dbControl->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$dbControl->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      return $dbControl;
    }

    public function connection() {

      self::$connection = $this->connect();
    }

    public static function getInstance() {

      if(is_null(self::$instance)){
        self::$instance = new Database();
      }
      return self::$instance;
    }

    public function getConnection() {

      // echo 'Get Connection deos get called';
       if(is_null(self::$connection)){
         self::$connection = $this->connect();
       }
       return self::$connection;
    }

     private function __construct() {}
     private function __clone() {}
     public function __wakeup() {}//__wakeup magic method must be public

    public function read($query) {
      $result = $this->connect()->query($query);
        if(!$result) {
          return false;
        } else {
          $data = false;
          $data = [];
          while($row = $result->fetchAll()) {
            $data[] = $row;
      }
      return $data;
    }

  }

    public function write($query){
      $result = $this->connect()->query($query);
      if(!$result){
        return false;
      }else{
        return true;
      }
    }


}
