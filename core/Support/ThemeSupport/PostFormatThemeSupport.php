<?php

namespace Core\Support\ThemeSupport;

class PostFormatThemeSupport extends ThemeSupport
{
    function definition(): string
    {
        return self::POST_FORMATS;
    }

    protected function options(): array
    {
        return [
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'audio',
        ];
    }
}