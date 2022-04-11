<?php

declare(strict_types=1);

namespace App;

use App\Config\Config;
use App\Routes\Routes;
use Leap\Leap;

(new Leap(Config::get()))
    ->boot(Routes::setup(...));
