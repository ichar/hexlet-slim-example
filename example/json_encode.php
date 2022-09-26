$app->get('/phones', function ($request, $response) use ($phones) {
    return $response->write(json_encode($phones));
});

$app->get('/domains', function ($request, $response) use ($domains) {
    return $response->write(json_encode($domains));
});