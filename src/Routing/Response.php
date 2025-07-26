<?php

declare(strict_types=1);

namespace App\Routing;

use App\Views\View;

final class Response
{   
    public function __construct(
        public readonly int $httpResponseCode = 200,
        public readonly View | null $view = null
    ){}
}