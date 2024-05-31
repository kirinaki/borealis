<?php

namespace Core\ServiceProviders;

class PageServiceProvider extends ServiceProvider {
	public function register() {
		foreach ( \Core\Facades\Config::get("app.pages") as $item ) {
			( new $item )->register();
		}
	}
}