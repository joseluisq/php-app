<?php

declare(strict_types=1);

namespace App\Config;

use Leap\ConfigInterface;

/** Application settings class. */
final class Config implements ConfigInterface
{
    /**
     * Get all application settings loaded from the system environment variables.
     * NOTE: relative-path values are relative to the app root directory.
     */
    public static function get(): array
    {
        return [
            'database' => [
                'driver'    => $_ENV['DATABASE_DRIVER'] ?? 'sqlite', // sqlite | mysql | pgsql | sqlsrv
                'host'      => $_ENV['DATABASE_HOST'] ?? 'localhost',
                'database'  => $_ENV['DATABASE_DATABASE'] ?? 'database/sqlite.db', // sqlite: path file | others: database name
                'charset'   => $_ENV['DATABASE_CHARSET'] ?? 'utf8',
                'collation' => $_ENV['DATABASE_COLLATION'] ?? 'utf8mb4_bin',
                'prefix'    => $_ENV['DATABASE_PREFIX'] ?? '',
            ],
            'views' => [
                'views_dir' => $_ENV['APP_VIEWS_DIR'] ?? 'views',
                'cache_dir' => $_ENV['APP_CACHE_DIR'] ?? '/tmp/cache',
            ],
            'logger' => [
                'name'      => $_ENV['LOGGER_NAME'] ?? 'production',
                'output'    => $_ENV['LOGGER_OUTPUT'] ?? 'stdout', // stdout | file
                'path'      => $_ENV['LOGGER_PATH'] ?? 'logs/production.log',
                'level'     => $_ENV['LOGGER_LEVEL'] ?? 'ERROR', // INFO | NOTICE | WARNING | ERROR | CRITICAL | ALERT | EMERGENCY | ERROR
            ],
        ];
    }
}
