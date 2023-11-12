<?php

namespace DevFun\MVC\Database;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testGetConnection()
    {
        // Adjust the configuration for the test database
        $_ENV['DB_HOST'] = 'localhost';
        $_ENV['DB_PORT'] = '3306';
        $_ENV['DB_NAME'] = 'dev_php_prod';
        $_ENV['DB_USERNAME'] = 'root';
        $_ENV['DB_PASSWORD'] = '123';

        // Call the method under test
        $connection = Database::getConnection();

        // Assertion
        self::assertInstanceOf(\PDO::class, $connection);
    }
}
