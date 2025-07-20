<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router\Router;

$router = new Router();

$router->handleUri();

var_dump($_SERVER['PATH_INFO']);
// if ($_SERVER['PATH_INFO'])

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pure php CRUD</title>
</head>
<body>
<main>
    <h1>
        Добро пожаловать в CRUD на чистом PHP!
    </h1>

    <?= 'negri' ?>
</main>
</body>
</html>