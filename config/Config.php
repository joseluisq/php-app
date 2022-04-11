<?php

declare(strict_types=1);

namespace App\Config;

/** Application settings class. */
final class Config
{
    /** Get all application settings. */
    public static function get()
    {
        return [
            'database' => [
                'driver'    => 'sqlite',
                'host'      => 'localhost',
                'database'  => __DIR__ . '/../database/todos.db',
                'charset'   => 'utf8',
                'collation' => 'utf8mb4_bin',
                'prefix'    => '',
            ],
            'views' => [
                'views_dir' => __DIR__ . '/../views',
                'cache_dir' => '/tmp/cache',
            ],
            'logger' => [
                'name'  => 'development',
                'path'  => __DIR__ . '/../logs/app.log',
                'level' => 'DEBUG',
            ],
        ];
    }
}
