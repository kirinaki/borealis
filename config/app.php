<?php

return [

    "debug" => true,
    "timezone" => 'America/Mexico_City',

    "providers" => [
        \App\Providers\PostTypesServiceProvider::class,
        \App\Providers\ActionServiceProvider::class,
        \App\Providers\FieldsetServiceProvider::class,
        \App\Providers\ControllerServiceProvider::class,
        \App\Providers\ThemeSupportServiceProvider::class,
    ]
];