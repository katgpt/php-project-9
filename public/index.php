<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

$app = AppFactory::create();
$renderer = new PhpRenderer(__DIR__ . '/../templates');

$app->get('/', function ($request, $response, $args) use ($renderer) {
    return $renderer->render($response, 'home.php', ['name' => 'John']);
});

$app->run();
