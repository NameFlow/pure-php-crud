<?php

declare(strict_types=1);

namespace App\Routing;

use App\Views\View;

class Response
{   
    private int $httpResponseCode;
    private View | null $view;

    public function __construct($httpResponseCode = 200, $view = null)
    {
        $this->httpResponseCode = $httpResponseCode;
        $this->view = $view;
    }

    public function getHttpResponseCode()
    {
        return $this->httpResponseCode;
    }

    public function getView(): View
    {
        return $this->view;
    }
}