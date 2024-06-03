<?php

namespace Core\Facades;

abstract class Facade
{
    protected static $app;

    protected abstract static function getFacadeAccessor();

    public static function setFacadeApplication($app): void
    {
        static::$app = $app;
    }

    public static function __callStatic($method, $args)
    {
        $instance = static::$app;
        $resolvedService = $instance->get(static::getFacadeAccessor());
        return $resolvedService->$method(...$args);
    }
}
