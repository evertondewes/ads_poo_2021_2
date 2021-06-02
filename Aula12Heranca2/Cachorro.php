<?php

require_once 'Animal.php';

class Cachorro extends Animal
{

    public function late()
    {
        echo 'Au au au'  . PHP_EOL;
    }
}