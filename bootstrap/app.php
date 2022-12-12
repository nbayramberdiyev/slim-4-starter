<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;

/** @var Psr\Container\ContainerInterface $container */
$container = require __DIR__ . '/container.php';

AppFactory::setContainer($container);

return AppFactory::create();
