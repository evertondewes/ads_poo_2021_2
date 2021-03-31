<?php

class Descrescente
{
    public function apresentarDescrecente($numero)
    {
        for ( ; $numero >= 0; $numero--) {
            echo $numero . PHP_EOL;
        }
    }

    public function apresentarDescrecente2($numero)
    {
        for ( $i = $numero; $i >= 0; $i--) {
            echo $i . PHP_EOL;
        }
    }

    public function apresentarDescrecente3($numero)
    {
        while ( $numero >= 0) {
            echo $numero . PHP_EOL;

            $numero = $numero - 1; // $numero -=1;  $numero--;
        }
    }
}