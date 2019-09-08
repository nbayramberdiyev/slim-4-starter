<?php

declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

$container = new Container;

AppFactory::setContainer($container);

$container->set('view', function() {
    return new Twig('../resources/views', ['cache' => false]);
});