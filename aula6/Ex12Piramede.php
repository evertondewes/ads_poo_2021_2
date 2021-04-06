<?php

/*
 Crie uma classe que desenhe a seguinte pirâmide de números. O usuário determina a quantidade de
linhas.
01
02 02
03 03 03
04 04 04 04
05 05 05 05 05
06 06 06 06 06 06
07 07 07 07 07 07 07
08 08 08 08 08 08 08 08
09 09 09 09 09 09 09 09 09
10 10 10 10 10 10 10 10 10 10
11 11 11 11 11 11 11 11 11 11 11

 */

class Piramede
{
    function desenhar($linhas)
    {
        for ($i = 1; $i <= $linhas; $i++) {
            for($j = 0; $j < $i; $j++ ) {
                echo str_pad($i, 2, '0', STR_PAD_LEFT) . ' ';
            }
            echo PHP_EOL;
        }
    }
}