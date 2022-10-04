<?php

declare(strict_types=1);

namespace Kaisar\DesignPatterns\Creational\SingletonPattern;

class DatabaseConnection
{
    private static ?DatabaseConnection $connection = null;

    /**
     * @return DatabaseConnection
     */
    public static function getConnection(): DatabaseConnection
    {
        if (self::$connection === null) {
            self::$connection = new self();
        }

        return self::$connection;
    }
}
