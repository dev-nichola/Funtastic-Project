<?php


$url = getenv('APP_URL') ?: 'localhost';
$port = getenv('APP_PORT') ?: '8000';

echo "Server is running at http://{$url}:{$port}" . PHP_EOL;

passthru("php -S {$url}:{$port} -t public");