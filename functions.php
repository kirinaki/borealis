<?php
if (!defined('ABSPATH')) exit;

require "vendor/autoload.php";

use Kirinaki\Framework\Application\Application;
use Kirinaki\Framework\Application\Configuration\ApplicationConfig;

$applicationConfig = new ApplicationConfig(
    basePath: __DIR__,
    filePath: __FILE__,
);

Application::configure($applicationConfig)
    ->themeSetup()
    ->create();
