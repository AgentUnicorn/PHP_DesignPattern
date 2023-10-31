<?php

namespace App\Singleton;
class Log {
    protected static Log $instance;
    protected static array $logs;
    private function __construct()
    {
        if (is_null(self::$instance)) {
            self::$instance = self::init();
            self::$logs = [];
        }

        return self::$instance;
    }

    private function init(): Log
    {
        return new self;
    }

    public static function push(string $log): void
    {
        self::$logs[] = $log;
    }

    public static function print(): void
    {
        foreach (self::$logs as $log) {
            var_dump($log);
        }
    }
}