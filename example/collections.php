<?php

use Slim\Factory\AppFactory;

require '/composer/vendor/autoload.php';

$companies = App\Generator::generate(100);

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response, $args) {
    return $response->write('open something like (you can change id): /companies/5');
});

// BEGIN (write your solution here)
$app->get('companies/{id}', function ($request, $response, $args) {
    $id = args['id'];
    $company = $companies->firshWhere('id', $id);
    if (isset($company)) {
        return $response->write(json_encode($company));
    } else {
        $response = $response->write("Not found {$id}");
        return $response->withStatus(404);
});
// END

$app->run();
-------------
// BEGIN
$app->get('/companies/{id:[0-9]+}', function ($request, $response, $args) use ($companies) {
    $id = $args['id'];
    $company = collect($companies)->firstWhere('id', $id);
    if (!$company) {
        return $response->withStatus(404)->write('Page not found');
    }
    return $response->write(json_encode($company));
});
// END