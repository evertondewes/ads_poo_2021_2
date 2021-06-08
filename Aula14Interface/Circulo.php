<?php

require_once 'ObjetoGeometrico.php';

class Circulo implements ObjetoGeometrico
{
    protected $raio;

    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }

    public function getArea(): float
    {
        return pi() * pow($this->raio, 2);
    }

    public function getPerimetro(): float
    {
        return 2 * pi() * $this->raio;
    }

    public function getRaio()
    {
        return $this->raio;
    }


}