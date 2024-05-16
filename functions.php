<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/twig.config.php';
require_once __DIR__ . '/config/vite.config.php';
$app = require_once __DIR__ . "/config/app.config.php";

foreach ($app["configuration"] as $item) (new $item)->register();
foreach ($app["theme_supports"] as $item) (new $item)->register();
foreach ($app["pages"] as $item) (new $item)->register();
foreach ($app["post_types"] as $item) (new $item)->register();
foreach ($app["controllers"] as $item) (new $item)->register();