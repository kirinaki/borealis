<?php

namespace Core\Facades;

abstract class Facade
{
    protected static $app;

    protected static function getFacadeAccessor()
    {
        throw new \Exception('Facade does not implement getFacadeAccessor method.');
    }

    public static function setFacadeApplication($app)
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
