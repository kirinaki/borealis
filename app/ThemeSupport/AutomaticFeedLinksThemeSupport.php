<?php

namespace App\ThemeSupport;

class AutomaticFeedLinksThemeSupport extends ThemeSupport
{

    public function register(): void
    {
        add_theme_support('automatic-feed-links');
    }
}