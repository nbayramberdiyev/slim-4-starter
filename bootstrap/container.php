<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

$definitions = [
    'settings' => function () {
        return require 'settings.php';
    },

    Twig::class => function (ContainerInterface $container) {
        $settings = $container->get('settings');
        $options = [
            'debug' => $settings['app']['debug'],
            'cache' => $settings['view']['cache'],
        ];

        return Twig::create($settings['view']['path'], $options);
    },
];

return (new ContainerBuilder())->addDefinitions($definitions)->build();
