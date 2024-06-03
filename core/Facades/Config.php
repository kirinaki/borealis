<?php

namespace Core\Facades;

/**
 * @method static get(string $key): string|null
 */
class Config extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Core\Support\Config::class;
    }
}
