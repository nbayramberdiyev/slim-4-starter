<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;

require __DIR__ . '/container.php';

$app = AppFactory::create();

require __DIR__ . '/middleware.php';

require __DIR__ . '/../routes/web.php';