<?php

namespace App\PostTypes;

use Astrahoshi\BorealCore\Contracts\Registrable;

abstract class PostType implements Registrable
{
    abstract public function handle();

    public function register(): void
    {
        add_action('init', [$this, "handle"]);
    }
}