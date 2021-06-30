<?php

require_once 'Calculadora.php';

$calc = new Calculadora();

$resultado = $calc->dividir(10, 2);

echo "O resultado é: $resultado " . PHP_EOL;