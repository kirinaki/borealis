<?php

namespace Core;

use Core\Contracts\Registrable;
use Core\Http\Request;
use Core\Http\Response;
use Core\Http\Route;
use DI\Container;

abstract class Controller implements Registrable
{
    protected Container $app;

    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    abstract function route(): Route;

    abstract function handle(Request $request): ?Response;

    public function register(): void
    {
        add_action('admin_post_' . $this->route()->event(), [$this, "prepare"]);
        add_action('admin_post_nopriv_' . $this->route()->event(), [$this, "prepare"]);
    }

    public function prepare(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $data = match ($method) {
            "POST" => $_POST,
            "GET" => $_GET
        };

        $request = new Request(
            method: $method,
            data: $data
        );

        if ($request->method() == $this->route()->method()) {
            $response = $this->handle($request);
            $response?->render();
        }

    }
}