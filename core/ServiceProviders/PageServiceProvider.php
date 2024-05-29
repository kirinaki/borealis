<?php

namespace Core\ServiceProviders;

class PageServiceProvider extends ServiceProvider {
	public function register() {
		$classes = $this->app->get( "config.app" )["pages"];
		foreach ( $classes as $item ) {
			( new $item )->register();
		}
	}
}