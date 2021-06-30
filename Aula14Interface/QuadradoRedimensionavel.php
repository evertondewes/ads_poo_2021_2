<?php

require_once 'Quadrado.php';
require_once 'Redimensionavel.php';

class QuadradoRedimensionavel extends Quadrado implements Redimensionavel {

    public function redimensionar(float $percentual)
    {
        $this->tamanhoLado *= $percentual;
    }
}