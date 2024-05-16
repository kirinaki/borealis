<?php

namespace App\ThemeSupport;

class PostFormatThemeSupport extends ThemeSupport
{

    public function register(): void
    {
        add_theme_support(
            'post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            )
        );
    }
}