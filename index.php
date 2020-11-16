<?php
require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    subject: "ola",
    body: "<p>oi</p>",
    recipient_name: "Raziel",
    recipient_email: "razielx3@live.com"
)->send();

if (!$email->error()) {
    var_dump(expression: true);
}else{
    echo $email->error()->getMessage();
}