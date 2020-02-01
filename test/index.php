<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;


$novoEmail = new Email(2, "webmail.seuprovedor.com.br", "useremail@email.com", "123456", "tls", '587', "setFromMail@email.com.br", "Seu Nome");
$novoEmail->sendMail("Assunto de teste", "<p> Esse é um email de <b>teste</b></p>", "replyEmail@email.com", "Reply Name", "email@email.com", "Nome" );

var_dump($novoEmail);