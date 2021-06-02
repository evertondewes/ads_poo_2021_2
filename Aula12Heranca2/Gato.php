<?php

require_once 'Animal.php';

class Gato extends Animal
{
    public function mia()
    {
        echo 'Miauuu' . PHP_EOL;
    }
}