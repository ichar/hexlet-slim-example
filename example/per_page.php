/ BEGIN
$app->get('/companies', function ($request, $response) use ($companies) {
    $page = $request->getQueryParam('page', 1);
    $per = $request->getQueryParam('per', 5);
    $offset = ($page - 1) * $per;

    $sliceOfCompanies = array_slice($companies, $offset, $per);
    return $response->write(json_encode($sliceOfCompanies));
});
// END

--------------
<?php

use Slim\Factory\AppFactory;

require '/composer/vendor/autoload.php';

$companies = App\Generator::generate(100);

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    return $response->write('go to the /companies');
});

// BEGIN (write your solution here)
$app->get('/companies', function ($request, $response) use $companies {
    $page = $request->getQueryParam('page', 5);
    $per = $request->getQueryParam('per', 1);
    $data = array_slice($companies, ($per - 1) * $page, $page));

    return $response->write(json_encode($data));
});

// END

$app->run();

------------
$companies = range(1, 100, 1);

// BEGIN (write your solution here)
$app->get('/companies', function ($request, $response) use $companies {
    $page = $request->getQueryParam('page', 5);
    $per = $request->getQueryParam('per', 1);
    $data = array_slice($companies, ($per - 1) * $page, $page));
    print_r($data);
    #return $response->write(json_encode($data));
});

