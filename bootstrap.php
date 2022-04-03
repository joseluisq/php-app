<?php

declare(strict_types=1);

namespace App;

use App\Controllers\HomeCtrl;
use Leap\Leap;
use Leap\Route;

// Application settings
$app = new Leap([
    'database' => [
        'driver'    => 'sqlite',
        'host'      => 'localhost',
        'database'  => __DIR__ . '/db/todos.db',
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
]);

// Application routes
$app->boot(function (array $config) {
    Route::get('/',         [HomeCtrl::class, 'index'], $config);
    Route::get('/headers',  [HomeCtrl::class, 'headers'], $config);
    Route::get('/host',     [HomeCtrl::class, 'host'], $config);
});
