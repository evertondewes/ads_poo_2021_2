<?php

require_once 'Pessoa.php';

class Juridica extends Pessoa {


    public function setNome($nome)
    {
        $nome = $nome . ' LTDA';
        parent::setNome($nome);
    }
}