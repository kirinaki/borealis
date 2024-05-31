<?php

return [

    "debug" => true,
    "timezone" => 'America/Mexico_City',

    "providers" => [
        \Core\ServiceProviders\TwigServiceProvider::class,
        \App\ServiceProviders\ViteServiceProvider::class,
        \Core\ServiceProviders\ConfigurationServiceProvider::class,
        \Core\ServiceProviders\PageServiceProvider::class,
        \Core\ServiceProviders\PostTypeServiceProvider::class,
        \Core\ServiceProviders\ControllerServiceProvider::class,
        \App\ServiceProviders\ThemeSupportServiceProvider::class,
    ],

    "aliases" => [
        "config" => \Core\Facades\Config::class
    ],

    "configuration" => [
        \App\Actions\BootCarbonFields::class,
        \App\Actions\AddTwigFunctions::class,
        \App\Actions\SetGeneralContext::class,
    ],

    "theme_supports" => [
        \App\ThemeSupport\AutomaticFeedLinksThemeSupport::class,
        \App\ThemeSupport\Html5ThemeSupport::class,
        \App\ThemeSupport\MenusThemeSupport::class,
        \App\ThemeSupport\PostFormatThemeSupport::class,
        \App\ThemeSupport\PostThumbnailThemeSupport::class,
        \App\ThemeSupport\TitleTagThemeSupport::class
    ],

    "pages" => [

    ],

    "post_types" => [

    ],

    "controllers" => [
        
    ]
];