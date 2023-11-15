<?php

namespace DevFun\MVC\Database;

use PDO;

class Database
{
    private static ?\PDO $pdo = null;

    public static function getConnection(): \PDO
    {
        if (self::$pdo == null) {
            require __DIR__ . "/../../config/database.php";
            $config = getDatabaseConfig();
            self::$pdo = new \PDO(
                $config['database']['url'],
                $config['database']['username'],
                $config['database']['password']
            );
        }
        return self::$pdo;
    }


    // Database Transactional
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
