<?php

declare(strict_types=1);

namespace App\Routes;

use App\Controllers\HomeCtrl;
use Leap\Route;
use Leap\RoutesInterface;

/** Application routes class. */
final class Routes implements RoutesInterface
{
    /** Configure all application routes. */
    public static function setup(Route $route)
    {
        $route->get('/',            [HomeCtrl::class, 'index']);
        $route->get('/todos',       [HomeCtrl::class, 'todos']);
        $route->get('/todos/{id}',  [HomeCtrl::class, 'todo']);
    }
}
