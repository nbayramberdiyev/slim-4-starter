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
    if (isset($_ENV[$key])) {
        return match (strtolower($_ENV[$key])) {
            'true'  => true,
            'false' => false,
            'null'  => null,
            default => $_ENV[$key],
        };
    }

    return $default;
}
