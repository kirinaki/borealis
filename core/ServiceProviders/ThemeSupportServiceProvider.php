<?php

namespace Core\ServiceProviders;

abstract class ThemeSupportServiceProvider extends ServiceProvider
{
    protected function registerThemeSupport(string $class): void
    {
        (new $class)->register();
    }
}