<?php

require_once 'Circulo.php';
require_once 'Redimensionavel.php';

class CirculoRedimensionavel extends Circulo implements Redimensionavel
{
    public function redimensionar(float $percentual)
    {
        $this->raio *= $percentual;
    }
}