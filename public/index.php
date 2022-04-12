<?php

declare(strict_types=1);

if (($_ENV['APP_ENV'] ?? 'production') === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

require __DIR__ . '/../vendor/autoload.php';
