<?php

declare(strict_types=1);

namespace App\Routes;

use App\Controllers\HomeCtrl;
use Leap\Route;

Route::get('/',         [HomeCtrl::class, 'index']);
Route::get('/headers',  [HomeCtrl::class, 'headers']);
Route::get('/host',     [HomeCtrl::class, 'host']);
