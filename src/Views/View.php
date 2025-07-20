<?php

declare(strict_types=1);

namespace App\Views;

class View
{
    private string $view;

    public function __construct(string $view)
    {
        $this->view = $view;
    }

    public function getView(): string
    {
        $view = $this->view;
        $formatedPathToView = '/../Views/' . str_replace('.', '/', $view) . '.php';
        return require_once __DIR__ . $formatedPathToView;
    }
}