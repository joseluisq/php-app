<?php

declare(strict_types=1);

namespace App\Routes;

use App\Controllers\TodoCtrl;

/** Application routes class. */
final class Routes implements \Leap\RoutesInterface
{
    /** Configure all application routes. */
    public static function setup(\Leap\Route $route)
    {
        $route->get('/',            [TodoCtrl::class, 'index']);
        $route->get('/todos',       [TodoCtrl::class, 'todos']);
        $route->get('/todos/{id}',  [TodoCtrl::class, 'todo']);
    }
}
