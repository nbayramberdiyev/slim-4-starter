<?php

declare(strict_types=1);

use function App\env;

return [
    'app' => [
        'name'   => env('APP_NAME', 'Slim 4 Starter'),
        'env'    => env('APP_ENV', 'production'),
        'debug'  => env('APP_DEBUG', false),
        'locale' => 'en',
    ],
    'view' => [
        'path'  => '../resources/views',
        'cache' => false,
    ],
];
