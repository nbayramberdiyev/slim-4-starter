<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class ContactController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return $this->view->render($response, 'contact/index.twig');
    }
}