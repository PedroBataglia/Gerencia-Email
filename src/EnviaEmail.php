<?php

namespace Pedro\Emails;

class EnviaEmail
{
    /** @var EmailCliente[] */
    public array $emails = [];
    public int $quantidadeEmail = 0;


    public function lancar(EmailCliente $email)
    {
        $this->adicionaEmailArray($email);
        $this->verificaQuantidadeDeEmail($this->emails);
        echo "esse email foi lançado".PHP_EOL;
    }

    public function adicionaEmailArray(EmailCliente $email): void
    {
        $this->emails[] = $email;
        $this->quantidadeEmail += 1;
    }

    public function verificaQuantidadeDeEmail(array $listaEmail): void
    {
        if (count($listaEmail) >= 5) {
            echo "limpar emails da lista e zerar contagem".PHP_EOL;
            $this->emails = [];
            $this->quantidadeEmail = 0;
        }
        echo "número de e-mails menor que 5 unidades.". PHP_EOL;
    }
}
