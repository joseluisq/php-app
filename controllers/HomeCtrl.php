<?php

declare(strict_types=1);

namespace App\Controllers;

use Leap\Controller;
use Leap\Response;

final class HomeCtrl extends Controller
{
    public function index(Response $resp)
    {
        $this->log()->info('this is an warning');
        $resp->html(
            $this->render('home.html', ['timestamp' => time()])
        );
    }

    /** GET /todo */
    public function todos(Response $resp)
    {
        $todos = $this->db()->table('todo')->get();
        $this->log()->info('todos selected');
        $resp->json($todos);
    }

    /** GET /todo/{id} */
    public function todo(Response $resp, array $args)
    {
        $id = (int) $args['id'];
        $todo = $this->db()->table('todo')->find($id);
        $this->log()->info("todo by id '$id' is found");
        $resp->json($todo);
    }
}
