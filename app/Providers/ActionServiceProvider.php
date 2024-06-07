<?php

namespace app\Providers;

use \Core\Actions\ActionServiceProvider as ServiceProvider;
use Core\Support\Actions\{BootCarbonFields, SetGeneralContext};

class ActionServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->add(BootCarbonFields::class);
        $this->add(SetGeneralContext::class);
    }
}