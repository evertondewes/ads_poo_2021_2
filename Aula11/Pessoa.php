<?php

class Pessoa {
    private $nome;
    private $dthNascimento;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNascimento($dthNascimento) {
        $this->dthNascimento = $dthNascimento;
    }

    public function imprimirNome() {
        echo 'O nome é: ' . $this->nome . PHP_EOL;
    }


}
