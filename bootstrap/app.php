<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;

AppFactory::setContainer(require 'container.php');

return AppFactory::create();
