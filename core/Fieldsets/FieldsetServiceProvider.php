<?php

namespace Core\Fieldsets;

use Core\ServiceProviders\ServiceProvider;

class FieldsetServiceProvider extends ServiceProvider
{
    private array $fieldsets = [];

    public function register(): void
    {
        $this->boot();
        $this->createFieldsets();
    }

    protected function add(string $class): void
    {
        $this->fieldsets[] = $class;
    }

    private function createFieldsets(): void
    {
        foreach ($this->fieldsets as $item) {
            (new $item)->register();
        }
    }
}