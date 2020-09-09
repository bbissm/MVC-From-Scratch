<?php

class Database {
  public static $host = 'localhost';
  public static $dbName = 'mvc_project';
  public static $username = 'root';
  public static $password = 'martin1997';


  private static function con() {
    // try {

      $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);

      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $pdo;

    // } catch(PDOException $e) {
    //   echo "ErrorLog == <pre>".$e."</pre>";
    //   // error_log("Failed to connect to database (/connect.php): ".$e);
    //     exit();
    // }
    
  }

  public static function query($query, $params = array()) {
    try {
      $stmt = self::con()->prepare($query);
      $stmt->execute($params);
      $data = $stmt->fetchAll();      
      return $data;

    } catch(PDOException $e) {
      echo "ErrorLog == <pre>".$e."</pre>";
    }
    
  }

}

?>