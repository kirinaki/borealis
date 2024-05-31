<?php

namespace Core;


use DI\Container;
use Core\Facades\{Facade, Config};

class Borealis
{

    public static function start(): void
    {
        $app = new Container([
            "configuration" => [
                "app" => require_once __DIR__ . "/../config/app.php",
                "mail" => require_once __DIR__ . "/../config/mail.php"
            ],
            "config" => \DI\get(\Core\Support\Config::class)
        ]);
        Facade::setFacadeApplication($app);

        foreach (Config::get("app.providers") as $serviceProvider) {
            (new $serviceProvider($app))->register();
        }
    }
}