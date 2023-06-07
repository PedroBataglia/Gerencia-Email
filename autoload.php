<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Pedro\\Emails', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

var_dump($caminhoArquivo);
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});
