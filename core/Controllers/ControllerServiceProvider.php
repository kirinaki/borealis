<?php

namespace Core\Controllers;

use Core\ServiceProviders\ServiceProvider;

abstract class ControllerServiceProvider extends ServiceProvider
{
    private array $controllers = [];

    public function register(): void
    {
        $this->boot();
        $this->createControllers();
    }

    private function createControllers()
    {
        foreach ($this->controllers as $item) {
            (new $item)->register();
        }
    }
}