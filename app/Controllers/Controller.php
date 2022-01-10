<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Container\ContainerInterface;

/**
 * Base Controller class.
 *
 * @property \Slim\Views\Twig $view
 */
abstract class Controller
{
    public function __construct(
        protected ContainerInterface $container
    ) {}

    /**
     * Returns an entry of the container by its identifier if it exists.
     *
     * @param  mixed $property
     *
     * @return mixed
     */
    public function __get(string $property): mixed
    {
        if ($this->container->has($property)) {
            return $this->container->get($property);
        }

        return null;
    }
}
