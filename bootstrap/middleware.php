<?php

declare(strict_types=1);

use Slim\Views\TwigMiddleware;
use Slim\Exception\HttpNotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Psr7\Response;
use App\Middleware\Session;

$app->addRoutingMiddleware();

$app->addErrorMiddleware(true, true, true)->setErrorHandler(HttpNotFoundException::class, function(Request $request, $exception) use ($container) {
    $response = new Response;
    return $container->get('view')->render($response->withStatus(404), 'errors/404.twig');
});

$app->add(TwigMiddleware::createFromContainer($app));

$app->add(new Session);