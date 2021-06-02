<?php

require_once 'Pessoa.php';

class Miseravel extends Pessoa
{
    public function mendiga()
    {
        echo 'mendigando....'  . PHP_EOL;
    }
}