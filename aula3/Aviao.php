<?php


class Aviao
{
    public $quantidadeTurbinas;
    public $quantidadeAsas;
    public $quantidadePassageiros;

    public function decolar()
    {
        echo 'Decolando!' . PHP_EOL;
    }

    public function pousar()
    {
        echo 'Pousando!' . PHP_EOL;
    }

    public function ligarLuzes()
    {
        echo 'Ligar Luzes!' . PHP_EOL;
    }
}
