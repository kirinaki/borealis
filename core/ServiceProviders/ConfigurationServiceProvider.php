<?php

namespace Core\ServiceProviders;

class ConfigurationServiceProvider extends ServiceProvider {
	public function register(): void {
		foreach ( \Core\Facades\Config::get("app.configuration") as $item ) {
			( new $item )->register();
		}
	}

}