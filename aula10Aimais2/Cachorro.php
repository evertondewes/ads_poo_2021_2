<?php

require_once 'Animal.php';

class Cachorro extends Animal
{

    public $raca;
    public $canil;

    public function latir() {
        echo 'au au au' . PHP_EOL;
    }

    public function marcarTerritorio() {
        echo 'mijando!! ' . PHP_EOL;
    }
}