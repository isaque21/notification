<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;


$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p> Esse é um email de <b>teste</b></p>", "email@email.com.br", "Isaque", "email@email.com.br", "Isaque" );

var_dump($novoEmail);