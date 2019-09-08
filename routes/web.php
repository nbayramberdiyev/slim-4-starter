<?php

declare(strict_types=1);

use App\Controllers\{HomeController, AboutController, ContactController};

$app->get('/', HomeController::class . ':index')->setName('home.index');
$app->get('/about', AboutController::class . ':index')->setName('about.index');
$app->get('/contact', ContactController::class . ':index')->setName('contact.index');