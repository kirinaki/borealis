<?php

namespace Core\PostTypes;

use Core\ServiceProviders\ServiceProvider;

class PostTypeServiceProvider extends ServiceProvider
{
    private array $postTypes = [];

    public function register(): void
    {
        $this->boot();
        $this->createPostTypes();
    }

    private function createPostTypes(): void
    {
        foreach ($this->postTypes as $item) {
            (new $item)->register();
        }
    }
}