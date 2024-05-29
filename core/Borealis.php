<?php

namespace Core;


use DI\Container;

class Borealis
{

    public static function start(): void
    {
        $app = new Container([
            "config.app" => require_once __DIR__ . "/../config/app.php",
            "config.mail" => require_once __DIR__ . "/../config/mail.php"
        ]);

        $serviceProviders = $app->get("config.app");
        foreach ($serviceProviders["providers"] as $serviceProvider) {
            (new $serviceProvider($app))->register();
        }
    }
}