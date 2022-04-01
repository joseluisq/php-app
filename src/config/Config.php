<?php

declare(strict_types=1);

namespace App\Config;

trait Config
{
    /** Configure Application */
    public function __construct()
    {
        // TODO: provide a configuration object
        parent::__construct(__DIR__ . '/../views', '/tmp/cache');
    }
}
