<?php
/*
Crie uma classe  MaiorNumero que contenha um método que receba dois números inteiros e imprima o maior entre eles.
 */

class MaiorNumero
{
    public function calcularMaiorNumero($a, $b)
    {
        if ($a == $b) {
            echo 'São iguais!: ' . $a . PHP_EOL;
        } else if ($a > $b) {
            echo 'A é maior:' . $a . PHP_EOL;
        } else {
            echo 'B é maior:' . $b . PHP_EOL;
        }
    }

}