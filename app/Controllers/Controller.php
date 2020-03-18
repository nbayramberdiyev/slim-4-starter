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
    /**
     * @var ContainerInterface $container
     */
    protected $container;

    /**
     * Base Controller constructor.
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param  mixed $property
     * @return mixed|null
     */
    public function __get($property)
    {
        if ($this->container->has($property)) {
            return $this->container->get($property);
        }

        return null;
    }
}