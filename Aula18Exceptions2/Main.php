<?php

require_once 'ContaCorrente.php';

$contaCorrenteEverton = new ContaCorrente();

try {
    $contaCorrenteEverton->setValorLimite(2000);
} catch (Exception $e) {
    echo 'Um problema aconteceu: ' . $e->getMessage();
}

try {
    $contaCorrenteEverton->depositar(1000);
} catch (Exception $e) {
    echo 'Um problema aconteceu: ' . $e->getMessage();
}

try {
    $contaCorrenteEverton->sacar(2500);
} catch (Exception $e) {
    echo 'Um problema aconteceu: ' . $e->getMessage() . PHP_EOL;
}

echo 'Dados da conta: Saldo [' . $contaCorrenteEverton->saldo . '] 
      Limite [' . $contaCorrenteEverton->limite . '] 
      Máximo de empréstimo [' . $contaCorrenteEverton->valorLimite . ']' . PHP_EOL;

try {
    $contaCorrenteEverton->sacar(-2500);
} catch (Exception $e) {
    switch ($e::class) {
        case 'ExceptionMenorZero' :
            echo 'Seu burrico, tem que ser um valor positivo!' . PHP_EOL;
            break;
        case 'ExceptionSacarValoresLimite' :
            echo 'Seu malandro, quer sacar o que não tem!'  . PHP_EOL;;
            break;
        default :
            echo 'Um problema aconteceu: ' . $e->getMessage() . PHP_EOL;
    }
}

echo 'Dados da conta: Saldo [' . $contaCorrenteEverton->saldo . '] 
      Limite [' . $contaCorrenteEverton->limite . '] 
      Máximo de empréstimo [' . $contaCorrenteEverton->valorLimite . ']' . PHP_EOL . PHP_EOL;

echo 'get_class_vars: ' . print_r(get_class_vars($contaCorrenteEverton::class), true) . PHP_EOL;
echo 'get_class_methods: ' .  print_r(get_class_methods($contaCorrenteEverton::class), true) . PHP_EOL;