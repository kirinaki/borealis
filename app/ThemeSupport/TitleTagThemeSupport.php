<?php

namespace App\ThemeSupport;

class TitleTagThemeSupport extends ThemeSupport
{

    public function register(): void
    {
        add_theme_support('title-tag');
    }
}