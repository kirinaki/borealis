<?php

namespace Core\ServiceProviders;

class ControllerServiceProvider extends ServiceProvider {
	public function register(): void
    {
		foreach ( \Core\Facades\Config::get("app.controllers") as $item ) {
			( new $item( $this->app ) )->register();
		}
	}
}