<?php

declare(strict_types=1);

use Slim\Views\TwigMiddleware;
use App\Middleware\StartSession;
use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

return function (Slim\App $app): void
{
    $app->addRoutingMiddleware();

    $app->add(TwigMiddleware::createFromContainer($app));

    $app->add(new StartSession);

    $app->add(new WhoopsMiddleware);
};