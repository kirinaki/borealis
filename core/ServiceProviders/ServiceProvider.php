<?php

namespace Core\ServiceProviders;

use Core\Contracts\Registrable;
use DI\Container;

abstract class ServiceProvider implements Registrable
{
    protected Container $app;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    public function boot(): void
    {

    }

}