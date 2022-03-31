<?php

declare(strict_types=1);

namespace App\Routes;

use Leap\Route;
use App\Controllers\HomeCtrl;

Route::get('/', [HomeCtrl::class, 'index']);
