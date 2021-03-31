<?php

require 'Ex10AdivinharNumero.php';

$adivinhacao = new AdivinharNumero();

$adivinhacao->sortearNumero();

do {
    $numeroUsuario = readline('Entre com um número: ');
    $resultado = $adivinhacao->tentandoAcertar($numeroUsuario);
    switch ($resultado) {
        case ACERTOU:
            $adivinhacao->mensagemSucesso();
            break;
        case MENOR:
            echo 'O valor que procura é menor que o que você entrou' . PHP_EOL;
            break;
        case MAIOR:
            echo 'O valor que procura é maior que o que você entrou' . PHP_EOL;
            break;
    }
} while ($resultado != ACERTOU);
