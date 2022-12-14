<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Component\Translation\Loader\JsonFileLoader;
use Symfony\Component\Translation\Translator;

$definitions = [
    'settings' => function (): array {
        return require 'settings.php';
    },

    Translator::class => function (ContainerInterface $container): Translator {
        /** @var array<string, array<string, mixed>> $settings */
        $settings = $container->get('settings');

        /** @var string $locale */
        $locale = $_SESSION['locale'] ?? $settings['app']['locale'];

        $translator = new Translator($locale);
        $translator->addLoader('json', new JsonFileLoader());

        if (file_exists($file = __DIR__ . '/../lang/' . $locale . '.json')) {
            $translator->addResource('json', $file, $locale);
        }

        return $translator;
    },

    Twig::class => function (ContainerInterface $container): Twig {
        /** @var array<string, array<string, mixed>> $settings */
        $settings = $container->get('settings');

        $options = [
            'debug' => $settings['app']['debug'],
            'cache' => $settings['view']['cache'],
        ];

        /** @var string $path */
        $path = $settings['view']['path'];

        $twig = Twig::create($path, $options);

        /** @var Translator $translator */
        $translator = $container->get(Translator::class);

        $twig->getEnvironment()->addGlobal('locale', $translator->getLocale());
        $twig->addExtension(new TranslationExtension($translator));

        return $twig;
    },
];

return (new ContainerBuilder())->addDefinitions($definitions)->build();
