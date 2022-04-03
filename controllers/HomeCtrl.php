<?php

declare(strict_types=1);

namespace App\Controllers;

use Leap\Controller;
use Leap\Header;
use Leap\Request;
use Leap\Response;

final class HomeCtrl extends Controller
{
    public function index(Response $resp)
    {
        $resp->html(
            $this->render('home.html', ['timestamp' => time()])
        );
    }

    public function headers(Request $req, Response $resp)
    {
        $resp->json([
            'headers' => $req->headers()
        ]);
    }

    public function host(Request $req, Response $resp)
    {
        $resp->json([
            'host' => $req->header(Header::Host),
        ]);
    }
}
