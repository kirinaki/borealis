<?php

namespace App\Actions;

use \Kirinaki\Framework\Actions\Action as BaseAction;

abstract class Action extends BaseAction
{
    protected string $hook = "init";

    public function register(): void
    {
        add_action($this->hook, [$this, "handle"]);
    }

    public abstract function handle(): void;
}