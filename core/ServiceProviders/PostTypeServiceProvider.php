<?php

namespace Core\ServiceProviders;

class PostTypeServiceProvider extends ServiceProvider {
	public function register(): void
    {
		foreach (\Core\Facades\Config::get("app.post_types") as $item ) {
			( new $item )->register();
		}
	}
}