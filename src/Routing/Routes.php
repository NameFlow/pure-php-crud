<?php

declare(strict_types=1);

namespace App\Routing;

use App\Controllers\ProductController;

class Routes
{
    private static array $GET = [
        ['/products', ProductController::class, 'index'],
        ['/products/{id}', ProductController::class, 'show'],
        ['/products/{id}/edit', ProductController::class, 'edit'],
        ['/countries/{id}/regions/{region}/cities/{city}', ProductController::class, 'cityInRegionInCountry'],
    ];

    private static array $POST = [
        ['/products', ProductController::class, 'store'],
    ];

    private static array $PUT = [
        ['/products/{id}', ProductController::class, 'update'],
    ];

    private static array $DELETE = [
        ['/products/{id}', ProductController::class, 'delete'],
    ];

    private static array $keys = [
        'uri', 'controller', 'controllerMethod' 
    ];

    private function __construct()
    {
    }

    public static function getAllRoutes(): array
    {
        $routes = self::convertAllToAssoc(self::$keys, [
            'get' => self::$GET,
            'post' => self::$POST,
            'put' => self::$PUT,
            'delete' => self::$DELETE,
        ]);

        return $routes;
    }
    
    private static function convertAllToAssoc(array $keys, array $allRoutes)
    {
        $result = [];
        
        foreach ($allRoutes as $method => $routesByMethod) {
            foreach($routesByMethod as $route) {
                $result[$method][] = array_combine($keys, $route);
            }
        }
        
        return $result;
    }
}
