<?php

namespace Core\ServiceProviders;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigServiceProvider extends ServiceProvider
{
    public function register()
    {
        global $loader;
        global $twig;

        $loader = new FilesystemLoader([
            dirname(__DIR__) . '/../resources'
        ]);

        $twig = new Environment($loader, [
            'debug' => \Core\Facades\Config::get("app.debug"),
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
    }
}