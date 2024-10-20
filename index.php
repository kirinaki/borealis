<?php

use Kirinaki\Framework\Application\Application;
use Kirinaki\Framework\Support\Facades\View;

View::render("index", ["version" => Application::VERSION]);