<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Container\ContainerInterface;

abstract class Controller
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if ($this->container->has($property)) {
            return $this->container->get($property);
        }

        return null;
    }
}