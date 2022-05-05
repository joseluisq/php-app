<?php

declare(strict_types=1);

namespace App\Core;

/** API error types */
enum ErrorTypes: string
{
    case Forbidden = 'Forbidden';
    case InvalidInput = 'InvalidInput';
    case InvalidRequest = 'InvalidRequest';
    case NotFound = 'NotFound';
    case Unauthorized = 'Unauthorized';
}
