<?php


class Fibonacci
{

    function exibir(int $X)
    {
        $valores = [0, 1];
        for($i = 1; $i <= $X; $i++) {
            $valores[] = $valores[$i] + $valores[$i - 1];
        }
        for($i = 1; $i <= $X; $i++) {
            echo $valores[$i] . ',';
        }

    }

}