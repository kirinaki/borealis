<?php

namespace Core\Support\ThemeSupport;

class Html5ThemeSupport extends ThemeSupport
{
    function definition(): string
    {
        return self::HTML5;
    }

    protected function options(): array
    {
        return [
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ];
    }
}