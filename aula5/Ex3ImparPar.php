<?php
/*
    Escreva um programa que imprima na tela a soma dos números ímpares
    entre 0 e 30 e a multiplicação dos números pares entre 0 e 30.
    Crie um método diferente para cada operação.
*/

class ImparPar
{
    public function somaImpares()
    {
        $acumulador = 0;
        for ($i = 1; $i <= 30; $i++) {
            if ($i % 2 != 0) {
                $acumulador += $i; //  $acumulador = $acumulador + $i ;
            }
        }

        echo "A soma dos impares de 0 até 30 é: $acumulador " . PHP_EOL;
    }

    public function multiplicaPares()
    {
        $acumulador = 1;
        for($i = 2; $i <= 30; $i++) {
            if($i % 2 == 0) {
                $acumulador *= $i;
            }
        }
        echo "A multiplicação dos números pares é: $acumulador \n";
    }
}