<?php


class Animal
{
    public $idade;
    public $nome = null;
    private $estado = 'limbo'; // vivo ou morto

    public function nascer($nome, $idade = 0, $nomePai = null)
    {
        $this->nome = $nome;

        if($idade != null) {
            $this->idade = $idade;
        }

        echo 'nascendo' . PHP_EOL;
        $this->estado = 'vivo';
    }

    public function morrer()
    {
        if ($this->estado == 'vivo') {
            echo 'adeus mundo cruel' . PHP_EOL;
            echo 'Morreu com: ' . $this->idade. PHP_EOL;
            $this->estado = 'morto';
        } else {
            echo 'para morrer é preciso estar vivo!' . PHP_EOL;
        }

    }
}