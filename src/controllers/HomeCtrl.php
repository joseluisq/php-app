<?php

declare(strict_types=1);

namespace App\Controllers;

use Leap\Controller;
use Leap\Response;
use App\Config\Config;

final class HomeCtrl extends Controller
{
    use Config;

    public function index(Response $resp)
    {
        $resp->html(
            $this->render('home.html', ['timestamp' => time()])
        );
    }
}
