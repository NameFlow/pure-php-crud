<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\Controller;
use App\Routing\Response;
use App\Views\View;

class ProductController extends Controller
{
    public function index(...$routeParams)
    {
        var_dump($routeParams);
    }

    public function show(...$routeParams)
    {
        var_dump($routeParams);

        return new Response(404);
    }

     public function edit(...$routeParams)
    {
        var_dump($routeParams);

    }

    public function cityInRegionInCountry(...$routeParams)
    {
        var_dump($routeParams);
    }
}
