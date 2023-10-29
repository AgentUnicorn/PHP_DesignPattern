<?php

namespace App\config;
final class DatabaseConfig
{
    private static ?DatabaseConfig $instance = null;
    private static array $values = [];

    // Using Singleton DP here
    private static function init(): DatabaseConfig
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $config = [
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD']
        ];

        self::$values = $config;
    }

    public static function getValue(string $key): string
    {
        self::init();
        return self::$values[$key] ?? "";
    }
}
