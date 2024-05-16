<?php

namespace App\ThemeSupport;

class MenusThemeSupport extends ThemeSupport
{
    public function register(): void
    {
        add_theme_support('menus');
    }
}