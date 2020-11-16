<?php
require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

//! DISPARO NORMAL
// $email->add(
//     subject: "ola",
//     body: "<p>oi</p>",
//     recipient_name: "Raziel",
//     recipient_email: "razielx3@live.com"
// )->send();

// if (!$email->error()) {
//     var_dump(expression: true);
// }else{
//     echo $email->error()->getMessage();
// }

//! DISPARO ANEXO
$email->add(
    subject: "ola",
    body: "<p>oi</p>",
    recipient_name: "Raziel",
    recipient_email: "razielx3@live.com"
)->attach(
    filePath: "01.png",
    fileName: "foto"
)->send();

if (!$email->error()) {
    var_dump(expression: true);
}else{
    echo $email->error()->getMessage();
}