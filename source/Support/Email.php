<?php
namespace Source\Support;

use FFI\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

class Email
{
    private $email;
    private $data;
    private $error;

    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->data = new stdClass();
        $this->mail->isSMTP();
        $this->mail->setLanguage( langcode: "br");
    }

}