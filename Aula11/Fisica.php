<?php

require_once 'Pessoa.php';

class Fisica extends Pessoa {

    public function setNascimento($dthNascimento){

        if($dthNascimento > date()) {
            echo 'Não foi possível colocar a data de Nascimento';
        } else {
            parent::setNascimento($dthNascimento);
        }
    }
}