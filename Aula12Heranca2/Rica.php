<?php

require_once 'Pessoa.php';

class Rica extends Pessoa
{
    public $dinheiro;

    public function fazCompras()
    {
        echo 'Comprando.....'  . PHP_EOL;
    }
}