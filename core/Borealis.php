<?php

namespace Core;


use Core\Facades\{Config, Facade, View};
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
        View::register();

        foreach (Config::get("app.providers") as $serviceProvider) {
            (new $serviceProvider($app))->register();
        }

    }
}