<?php

namespace Core\ServiceProviders;

class ControllerServiceProvider extends ServiceProvider {
	public function register() {
		$classes = $this->app->get( "config.app" )["controllers"];
		foreach ( $classes as $item ) {
			( new $item( $this->app ) )->register();
		}
	}
}