<?php

namespace Core\Facades;

class App extends Facade
{
    protected static function getFacadeAccessor()
    {
       return "DI\Container";
    }
}
