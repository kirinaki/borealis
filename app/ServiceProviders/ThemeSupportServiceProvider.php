<?php

namespace App\ServiceProviders;

use Core\ServiceProviders\ServiceProvider;

class ThemeSupportServiceProvider extends ServiceProvider {

	public function register(): void {
		foreach ( \Core\Facades\Config::get("app.theme_supports") as $item ) {
			( new $item )->register();
		}
	}
}