<?php

namespace Core\Fieldsets;

use Core\Contracts\Registrable;

abstract class Fieldset implements Registrable
{

    public function register(): void
    {
        add_action( 'carbon_fields_register_fields', [$this, "handle"]);
    }

    abstract function handle();

}