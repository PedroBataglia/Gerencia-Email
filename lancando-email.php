<?php

require_once 'src/EmailCliente.php';
require_once 'src/EnviaEmail.php';

use Pedro\Emails\{EmailCliente, EnviaEmail};

$novoEmail = new EmailCliente('Pedro Henrique', 'E-mail de teste');
$enviarEmailController = new EnviaEmail();

for ($index = 0; $index < 5; $index++) {
    $enviarEmailController->lancar($novoEmail);
}


var_dump( $enviarEmailController->emails, $enviarEmailController->quantidadeEmail);
