<?php

namespace App\ThemeSupport;

class Html5ThemeSupport extends ThemeSupport
{

    public function register(): void
    {
        add_theme_support('html5', [
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        );
    }
}