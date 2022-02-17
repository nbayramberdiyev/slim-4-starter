<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

return function (Di\Container $container): void {
    $container->set('settings', function () {
        return require 'settings.php';
    });

    $container->set(Twig::class, function (ContainerInterface $container) {
        ['path' => $path, 'cache' => $cache] = $container->get('settings')['view'];

        return Twig::create($path, ['cache' => $cache]);
    });
};
