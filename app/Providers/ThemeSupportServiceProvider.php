<?php

namespace App\Providers;

use \Kirinaki\Framework\ServiceProviders\ThemeSupportServiceProvider as ServiceProvider;
use Kirinaki\Framework\Wordpress\ThemeSupport\MenusThemeSupport;
use Kirinaki\Framework\Wordpress\ThemeSupport\PostThumbnailThemeSupport;

class ThemeSupportServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->add(PostThumbnailThemeSupport::class);
        $this->add(MenusThemeSupport::class);
    }
}