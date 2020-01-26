<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;


$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p> Esse é um email de <b>teste</b></p>", "comercial@prismanotebook.com.br", "Isaque", "ialcantara@faeterj-petropolis.edu.br", "Isaque" );

var_dump($novoEmail);