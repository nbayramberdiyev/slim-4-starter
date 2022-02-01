<?php

declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;
use Dotenv\Dotenv;

$container = new Container();

AppFactory::setContainer($container);

Dotenv::createImmutable(dirname(__DIR__))->load();

$app = AppFactory::create();

(require __DIR__ . '/container.php')($container);

(require __DIR__ . '/../routes/web.php')($app);

return $app;
