<?php

namespace App\Controllers;

use Astrahoshi\BorealCore\Contracts\Registrable;
use Astrahoshi\BorealCore\Http\Request;
use Astrahoshi\BorealCore\Http\Response;
use Astrahoshi\BorealCore\Http\Route;

abstract class Controller implements Registrable
{
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