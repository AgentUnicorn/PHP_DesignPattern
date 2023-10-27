<?php

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
//        $config = [
//            'host' => getenv('DB_HOST'),
//            'port' => getenv('DB_PORT'),
//            'username' => getenv('DB_USERNAME'),
//            'password' => getenv('DB_PASSWORD')
//        ];

        $config = [
            'host' => 'localhost',
            'port' => '80',
            'username' => 'sa',
            'password' => 'binhdev'
        ];

        self::$values = $config;
    }

    public static function getValue(string $key): string
    {
        self::init();
        return self::$values[$key] ?? "";
    }
}
