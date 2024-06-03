<?php

namespace Core\Facades;

/**
 * @method static render(string $view, $context = [])
 * @method static make(string $view, $context = []): string
 * @method static addFunction(\Twig\TwigFunction $twigFunction)
 */
class View extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return \Core\View::class;
    }
}