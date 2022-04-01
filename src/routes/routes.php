<?php

declare(strict_types=1);

namespace App\Routes;

use Leap\Route;
use Leap\Response;
use Leap\Request;

use App\Controllers\HomeCtrl;

Route::get('/', [HomeCtrl::class, 'index']);

Route::get('/headers', function (Request $req, Response $resp) {
    $resp->json([
        'HEADERS' => $req->headers()
    ]);
});

Route::get('/host', function (Request $req, Response $resp) {
    $resp->json([
        'HOST' => $req->header('host')
    ]);
});
