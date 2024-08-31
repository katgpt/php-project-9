<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';

use Slim\AppFactory;
use Slim\Views\PhpRenderer;

$app = AppFactory::create();

// Настройка PHP-View
$container = $app->getContainer();
$container['view'] = new PhpRenderer('path/to/templates');

// Маршрут для главной страницы
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'home.php', ['name' => 'John']);
});

$app->run();
