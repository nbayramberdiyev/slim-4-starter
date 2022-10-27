<?php

declare(strict_types=1);

namespace App;

/**
 * Gets the value of an environment variable.
 *
 * @param  string $key
 * @param  mixed  $default
 *
 * @return mixed
 */
function env(string $key, mixed $default = null): mixed
{
    if (! array_key_exists($key, $_SERVER)) {
        return $default;
    }

    if (is_array($_SERVER[$key]) || is_object($_SERVER[$key])) {
        return $_SERVER[$key];
    }

    return match (strtolower((string) $_SERVER[$key])) {
        'true'  => true,
        'false' => false,
        'null'  => null,
        default => $_SERVER[$key],
    };
}
