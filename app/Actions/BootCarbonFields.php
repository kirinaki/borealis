<?php

namespace App\Actions;

use Carbon_Fields\Carbon_Fields;

class BootCarbonFields extends Action
{
    protected string $hook = "after_setup_theme";
    public function handle(): void
    {
        Carbon_Fields::boot();
    }
}