<?php


/**
 * Jalanakan Ketika Ingin Test Koneksi Database
 * Cara Menjalankan :
 * vendor/bin/phpunit tests/DatabaseTest.php
 */
namespace DevFun\MVC\Database;

use PHPUnit\Framework\TestCase;
use DevFun\MVC\Database\Database;

class DatabaseTest extends TestCase
{
    public function testGetConnection()
    {

        $connection = Database::getConnection();
        self::assertInstanceOf(\PDO::class, $connection);
    }
}
