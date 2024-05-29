<?php

namespace Core;

use DI\Container;
use PHPMailer\PHPMailer\PHPMailer;

class Mail extends PHPMailer
{

    public function __construct(Container $app)
    {
        $config = $app->get("config.mail");
        $this->isSMTP();
        $this->CharSet = "UTF-8";
        $this->Host = $config["host"];
        $this->Port = $config["port"];
        $this->Username = $config["username"];
        $this->Password = $config["password"];
        parent::__construct();
    }
}