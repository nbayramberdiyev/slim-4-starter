<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

return function (Di\Container $container): void {
    $container->set('settings', function () {
        return require 'settings.php';
    });

    $container->set(Twig::class, function (ContainerInterface $container) {
        $settings = $container->get('settings');
        $options = [
            'debug' => $settings['app']['debug'],
            'cache' => $settings['view']['cache'],
        ];

        return Twig::create($settings['view']['path'], $options);
    });
};
