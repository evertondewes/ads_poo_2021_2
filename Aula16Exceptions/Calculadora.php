<?php

require_once 'ClasseDivisora.php';
require_once 'ExcecaoDivizaoPorZero.php';

class Calculadora
{

    public function dividir($x, $y)
    {
        $dividora = new ClasseDivisora();

        $resultado = 0;

        try {

            if ($y == 0) {
                throw new ExcecaoDivizaoPorZero();
            }

            $resultado = $dividora->divide($x, $y);

        } catch (DivisionByZeroError $e) {
            echo 'atenção, a divisão por zero não é permitida!!!' . PHP_EOL;

        } catch (ExcecaoDivizaoPorZero $e) {
            echo 'tratando outro tipo de exception: ' . $e->getMessage() . PHP_EOL;
        } finally {
            echo 'final do try/catch' . PHP_EOL;
        }
        return $resultado;
    }
}