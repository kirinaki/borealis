<?php

namespace Core\ServiceProviders;

class ConfigurationServiceProvider extends ServiceProvider {
	public function register(): void {
		$configurationClasses = $this->app->get( "config.app" )["configuration"];
		foreach ( $configurationClasses as $item ) {
			( new $item )->register();
		}
	}

}