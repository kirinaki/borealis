<?php

namespace App\Actions;


use Core\Contracts\Registrable;

abstract class Action implements Registrable {
	protected string $hook = "init";

	public function register(): void {
		add_action( $this->hook, [ $this, "handle" ] );
	}

	public abstract function handle(): void;
}