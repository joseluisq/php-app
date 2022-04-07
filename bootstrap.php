<?php

declare(strict_types=1);

namespace App;

use App\Controllers\HomeCtrl;
use Leap\Leap;
use Leap\Route;

// Application settings
(new Leap([
    'database' => [
        'driver'    => 'sqlite',
        'host'      => 'localhost',
        'database'  => __DIR__ . '/database/todos.db',
        'charset'   => 'utf8',
        'collation' => 'utf8mb4_bin',
        'prefix'    => '',
    ],
    'views' => [
        'views_dir' => __DIR__ . '/views',
        'cache_dir' => '/tmp/cache',
    ],
    'logger' => [
        'name'  => 'development',
        'path'  => __DIR__ . '/logs/app.log',
        'level' => 'DEBUG',
    ],
]))->boot(function (Route $route) {
    $route->get('/',         [HomeCtrl::class, 'index']);
    $route->get('/headers',  [HomeCtrl::class, 'headers']);
    $route->get('/host',     [HomeCtrl::class, 'host']);
});
