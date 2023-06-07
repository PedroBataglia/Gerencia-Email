<?php

namespace Pedro\Emails;

class EmailCliente
{
    public string $nome;
    public string $assunto;

    public function __construct(string $nome, string $assunto)
    {
        $this->nome = $nome;
        $this->assunto = $assunto;
    }
}
