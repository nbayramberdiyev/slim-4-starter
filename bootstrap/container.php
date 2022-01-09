<?php

declare(strict_types=1);

use Slim\Views\Twig;

return function (Di\Container $container): void
{
    $container->set('view', function() {
        return Twig::create('../resources/views', ['cache' => false]);
    });
};
