<?php

namespace App\ServiceProviders;

use Core\ServiceProviders\ServiceProvider;
use Core\Vite;

class ViteServiceProvider extends ServiceProvider {
	public function register(): void {
		( new Vite(entry_css: "resources/css/main.scss") )->register();
	}
}