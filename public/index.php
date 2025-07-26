<?php

declare(strict_types=1);

// Front Controller

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\ProductController;
use App\Core\Container;
use App\Routing\Router;

$requestUri = $_SERVER['REQUEST_URI' ?? '/'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

$container = new Container();

$container->bind(ProductController::class, function () {
    return new ProductController();
});

$router = new Router($requestUri, $requestMethod, $container);

$response = $router->handleUri();
$responseCode = $response->httpResponseCode;
$responseView = $response->view;

http_response_code($responseCode);
if ($responseView !== null) {
    echo $responseView->getView();
}

?>

