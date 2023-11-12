<?php 

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__. "/../../.env");
$dotenv->load();

return [
    'app' => [
        'url' => $_ENV['APP_URL'],
        'port' => $_ENV['APP_PORT'],
    ],
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'name' => $_ENV['DB_NAME'],
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];
