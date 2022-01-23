<?php

declare(strict_types=1);

use App\Middleware\StartSession;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

return function (Slim\App $app): void
{
    $app->addBodyParsingMiddleware();

    $app->addRoutingMiddleware();

    $app->add(TwigMiddleware::createFromContainer($app, Twig::class));

    $app->add(new StartSession);

    $app->add(new WhoopsMiddleware);
};
