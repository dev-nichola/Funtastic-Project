<?php


use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

return [
      'app' => [
            'url' => $_ENV['APP_URL'],
            'port' => $_ENV['APP_PORT'],
      ],
];
