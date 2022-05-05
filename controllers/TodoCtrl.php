<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\ErrorTypes;
use App\Core\Result;

final class TodoCtrl extends \Leap\Controller
{
    /** GET / */
    public function index(\Leap\Response $resp)
    {
        $this->log()->info('this is an warning');
        $resp->html(
            $this->render('home.html', ['timestamp' => time()])
        );
    }

    /** GET /todo */
    public function todos(\Leap\Response $resp)
    {
        $todos = $this->db()->table('todo')->get();
        $this->log()->info('todos selected');
        $resp->json(Result::Ok($todos));
    }

    /** GET /todo/{id} */
    public function todo(\Leap\Response $resp, array $args)
    {
        $id = (int) $args['id'];
        $todo = $this->db()->table('todo')->find($id);

        $data = match ($todo) {
            null => Result::Err(ErrorTypes::NotFound),
            default => Result::Ok($todo),
        };

        $resp->json($data);
    }
}
