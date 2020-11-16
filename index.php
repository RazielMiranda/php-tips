<?php
require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

//! DISPARO NORMAL
$email->add("ola","<p>oi</p>","Raziel","razielx3@live.com")->send();
if (!$email->error()) {
    var_dump(true);
}else{
    echo $email->error()->getMessage();
}

//! DISPARO ANEXO
// $email->add("ola","<p>oi</p>","Raziel","razielx3@live.com")->attach("01.png","foto")->send();
// if (!$email->error()) {
//     var_dump(true);
// }else{
//     echo $email->error()->getMessage();
// }