<?php


class Joia
{
    public $codigo;
    public $tipo;
    public $material;
    public $peso;
    public $valor;

    public function penhorar()
    {
        echo 'A jóia ' . $this->tipo . ' com o código ' . $this->codigo . ' possui o peso ' . $this->peso
        . ' e é feita de ' . $this-> material . ' e o valor é: ' . $this->valor;
    }

}