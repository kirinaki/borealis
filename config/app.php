<?php

return [

    "debug" => true,
    "timezone" => 'America/Mexico_City',

    "providers" => [
        \Core\ServiceProviders\PageServiceProvider::class,
        \Core\ServiceProviders\PostTypeServiceProvider::class,
        \Core\ServiceProviders\ControllerServiceProvider::class,
        \App\ServiceProviders\ThemeSupportServiceProvider::class,
    ],

    "pages" => [

    ],

    "post_types" => [

    ],

    "controllers" => [
        
    ]
];