<?php

namespace Core;


use Core\Facades\{Config, Facade};
use DI\Container;

class Borealis
{

    public static function start(): void
    {
        $app = new Container([
            "configuration" => [
                "app" => require_once __DIR__ . "/../config/app.php",
                "mail" => require_once __DIR__ . "/../config/mail.php",
            ],
        ]);
        Facade::setFacadeApplication($app);
        \Core\Facades\View::register();
        self::registerConfiguration();

        foreach (Config::get("app.providers") as $serviceProvider) {
            (new $serviceProvider($app))->register();
        }

    }

    static function registerConfiguration(): void
    {
        $classes = [
            \Core\Support\Actions\BootCarbonFields::class,
            \Core\Support\Actions\SetGeneralContext::class,
        ];
        foreach ($classes as $item ) {
            ( new $item )->register();
        }
    }
}