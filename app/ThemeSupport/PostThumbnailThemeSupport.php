<?php

namespace App\ThemeSupport;

class PostThumbnailThemeSupport extends ThemeSupport
{

    public function register(): void
    {
        add_theme_support('post-thumbnails');
    }
}