<?php

require_once 'Pessoa.php';

class Pobre extends Pessoa
{

    public function trabalha()
    {
        echo 'Trabalhando....' . PHP_EOL;
    }
}