<?php

require_once 'Animal.php';

class Reptil extends Animal
{
    private $tipoEscamas;

    public function setTipoEscamas($tipo) {
        $this->tipoEscamas = $tipo;
    }


    public function sairDoOvo() {
        $this->setDataNascimento(date('dd/MM/yy'));
    }

}