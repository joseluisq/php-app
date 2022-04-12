<?php

declare(strict_types=1);

namespace App\Controllers;

use Leap\Controller;
use Leap\Response;

final class HomeCtrl extends Controller
{
    public function index(Response $resp)
    {
        $resp->html(
            $this->render('home.html', ['timestamp' => time()])
        );
    }

    /** GET /todo */
    public function todos(Response $resp)
    {
        $todos = $this->db()->table('todo')->get();
        $resp->json($todos);
    }

    /** GET /todo/{id} */
    public function todo(Response $resp, array $args)
    {
        $id = (int) $args['id'];
        $todo = $this->db()->table('todo')->find($id);
        $resp->json($todo);
    }
}
