<?php

namespace Core\ServiceProviders;

class PostTypeServiceProvider extends ServiceProvider {
	public function register() {
		$classes = $this->app->get( "config.app" )["post_types"];
		foreach ( $classes as $item ) {
			( new $item )->register();
		}
	}
}