<?php

namespace App\ServiceProviders;

use Core\ServiceProviders\ThemeSupportServiceProvider as ServiceProvider;

class ThemeSupportServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerThemeSupport(\Core\Support\ThemeSupport\AutomaticFeedLinksThemeSupport::class);
        $this->registerThemeSupport(\Core\Support\ThemeSupport\Html5ThemeSupport::class);
        $this->registerThemeSupport(\Core\Support\ThemeSupport\PostFormatThemeSupport::class);
        $this->registerThemeSupport(\Core\Support\ThemeSupport\PostThumbnailThemeSupport::class);
        $this->registerThemeSupport(\Core\Support\ThemeSupport\TitleTagThemeSupport::class);
        $this->registerThemeSupport(\Core\Support\ThemeSupport\MenusThemeSupport::class);
    }


}