<?php

use Dotenv\Dotenv;


function getDatabaseConfig(): array
{

      $dotenv = Dotenv::createImmutable(__DIR__ . "/../.env");
      $dotenv->load();
      
      return [
            "database" => [
                  "db" => [
                        "url" => "mysql:host=" . getenv('DB_HOST') . ":" . getenv('DB_PORT') . ";dbname=" . getenv('DB_NAME'),
                        "username" => getenv('DB_USERNAME'),
                        "password" => getenv('DB_PASSWORD')
                  ]
            ]
      ];
}
