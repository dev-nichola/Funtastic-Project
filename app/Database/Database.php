<?php

namespace DevFun\MVC\Database;

use PDO;
use Dotenv\Dotenv;
use PDOException;

class Database
{
      private static ?\PDO $pdo = null;

      public static function getConnection(string $env = "db"): PDO
      {
          try {
              if (self::$pdo === null) {
                  // Load environment variables from .env file
                  $dotenv = Dotenv::createImmutable(__DIR__ . "/../..env");
                  $dotenv->load();
  
                  // Create New PDO
                  require_once __DIR__ . "/../../config/database.php";
                  $config = getDatabaseConfig();
  
                  $dsn = $config['database'][$env]['url'];
                  $username = $config['database'][$env]['username'];
                  $password = $config['database'][$env]['password'];
  
                  // Set PDO options
                  $options = [
                      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci",
                  ];
  
                  self::$pdo = new PDO($dsn, $username, $password, $options);
              }
          } catch (PDOException $e) {
              // Handle database connection error
              die("Connection failed: " . $e->getMessage());
          }
  
          return self::$pdo;
      }


      // Database Transaction
      public static function beginTransaction()
      {
            self::$pdo->beginTransaction();
      }

      public static function commitTransaction()
      {
            self::$pdo->commit();
      }

      public static function rollBack()

      {
            self::$pdo->rollBack();
      }
}
