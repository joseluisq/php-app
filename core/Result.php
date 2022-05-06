<?php

declare(strict_types=1);

namespace App\Core;

final class Result
{
    /** It represents a successful result `array` data. */
    public static function Ok(mixed $data = null): array
    {
        return [
            'success' => true,
            'data'    => $data,
        ];
    }

    /** It represents a failed result `array` data. */
    public static function Err(mixed $type = '', mixed $data = null): array
    {
        return [
            'success' => false,
            'type'    => $type,
            'data'    => $data,
        ];
    }
}
