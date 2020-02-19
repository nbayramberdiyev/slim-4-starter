<?php

declare(strict_types=1);

use Slim\Views\TwigMiddleware;
use App\Middleware\Session;
use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

$app->addRoutingMiddleware();

$app->add(new WhoopsMiddleware);

$app->add(TwigMiddleware::createFromContainer($app));

$app->add(new Session);