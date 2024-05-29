<?php

namespace App\ServiceProviders;

use Core\ServiceProviders\ServiceProvider;

class ThemeSupportServiceProvider extends ServiceProvider {

	public function register(): void {
		$classes = $this->app->get( "config.app" )["theme_supports"];
		foreach ( $classes as $item ) {
			( new $item )->register();
		}
	}
}