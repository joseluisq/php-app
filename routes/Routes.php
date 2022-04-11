<?php

declare(strict_types=1);

namespace App\Routes;

use App\Controllers\HomeCtrl;

/** Application routes class. */
final class Routes
{
    /** Configure all application routes. */
    public static function setup(\Leap\Route $route)
    {
        $route->get('/',            [HomeCtrl::class, 'index']);
        $route->get('/todos',       [HomeCtrl::class, 'todos']);
        $route->get('/todos/{id}',  [HomeCtrl::class, 'todo']);
    }
}
