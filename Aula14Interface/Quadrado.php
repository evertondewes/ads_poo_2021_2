<?php

require_once 'ObjetoGeometrico.php';

class Quadrado implements ObjetoGeometrico
{
    protected $tamanhoLado;

    public function __construct(float $tamanho)
    {
        $this->tamanhoLado = $tamanho;
    }

    public function getPerimetro(): float
    {
        return $this->tamanhoLado * 4;
    }

    public function getArea(): float
    {
        return $this->tamanhoLado * $this->tamanhoLado;
    }

    public function getTamanhoLado(): float
    {
        return $this->tamanhoLado;
    }
}