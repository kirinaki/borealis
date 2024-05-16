<?php

return [

    "timezone" => 'America/Mexico_City',

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