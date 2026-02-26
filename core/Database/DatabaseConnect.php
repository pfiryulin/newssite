<?php

namespace core\Database;

class DatabaseConnect
{
    public static ?\PDO $instance  = null;

    /**
     * Establishing a connection to the database
     *
     * @return \PDO
     */
    public static function getInstance(): \PDO
    {
        if(!self::$instance)
        {
            $config = require __DIR__ . '/../Config/database.php';

            self::$instance = new \PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4",
                $config['user'],
                $config['password'],
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    \PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
        }

        return self::$instance;
    }
}