<?php

namespace App\Config;

use PHPMailer\PHPMailer\PHPMailer;

class Mail extends PHPMailer
{

    public function __construct()
    {
        $this->isSMTP();
        $this->CharSet = "UTF-8";
        $this->Host = SMTP_HOST;
        $this->Port = SMTP_PORT;
        $this->Username = SMTP_USERNAME;
        $this->Password = SMTP_PASSWORD;
        parent::__construct();
    }
}