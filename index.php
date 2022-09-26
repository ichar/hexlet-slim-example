<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Hi!!Welcome to Slim! It\'s OK');
    return $response;
    // Благодаря пакету slim/http этот же код можно записать короче
    // return $response->write('Welcome to Slim!');
});
$app->get('/users', function ($request, $response) {
    $response = $response->write("GET /users\n");
    return $response->withStatus(302);
});
$app->post('/users', function ($request, $response) {
    return $response->write("POST /users\n");
});
$app->get('/companies', function ($request, $response) {
    $companies = range(1, 100, 1);
    #print_r($companies);
    print_r(array_slice($companies, 0, 5));
    return $response->write("GET /companies\n");
});

$app->post('/companies', function ($request, $response) {
    return $response->write("POST /companies\n");
});

$app->get('/courses/{id}', function ($request, $response, array $args) {
    $id = $args['id'];
    return $response->write("Course id: {$id}");
});

$app->run();