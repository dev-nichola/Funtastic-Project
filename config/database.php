<?php

use Dotenv\Dotenv;

function getDatabaseConfig(): array
{
      $dotenv = Dotenv::createImmutable(dirname(__DIR__));
      $dotenv->load();

      $config = [
            "database" => $_ENV['DB_DATABASE'],
            "host" => $_ENV['DB_HOST'],
            "port" => $_ENV['DB_PORT'],
            "dbname" => $_ENV['DB_NAME'],
            "username" => $_ENV['DB_USERNAME'],
            "password" => $_ENV['DB_PASSWORD']
      ];
     
      return [
            "database" => [
                  "url" => "{$config['database']}:host={$config['host']}:{$config['port']};dbname={$config['dbname']}",
                  "username" => $config['username'],
                  "password" => $config['password']
            ]
      ];
}
