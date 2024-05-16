<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

global $loader;
global $twig;

$loader = new FilesystemLoader([
    dirname(__DIR__) . '/resources'
]);
$twig = new Environment($loader, [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
