<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

abstract class Controller
{
    public function __construct(
        protected Twig $twig
    ) {
    }

    /**
     * Creates a rendered view response.
     *
     * @param Response             $response
     * @param string               $template
     * @param array<string, mixed> $data
     *
     * @return Response
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    protected function render(Response $response, string $template, array $data = []): Response
    {
        $response = $response->withHeader('Content-Type', 'text/html; charset=utf-8');

        return $this->twig->render($response, $template, $data);
    }

    /**
     * Creates a JSON response.
     *
     * @param Response $response
     * @param mixed    $data
     * @param int      $status
     * @param int      $flags
     *
     * @return Response
     */
    protected function json(Response $response, mixed $data, int $status = 200, int $flags = 0): Response
    {
        $response->getBody()->write((string) json_encode($data, $flags));

        return $response->withStatus($status)->withHeader('Content-Type', 'application/json');
    }

    /**
     * Creates a redirect response.
     *
     * @param Response $response
     * @param string   $url
     * @param int      $status
     *
     * @return Response
     */
    protected function redirect(Response $response, string $url, int $status = 302): Response
    {
        return $response->withStatus($status)->withHeader('Location', $url);
    }
}
