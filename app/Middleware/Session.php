<?php

declare(strict_types=1);

namespace App\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

class Session
{
    public function __invoke(Request $request, RequestHandler $handler)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $request = $request->withAttribute('session', $_SESSION);

        return $handler->handle($request);
    }
}