<?php

/*
 Exiba o valor do empréstimo possível para um funcionário de uma empresa.
Sabe-se:
Cargo             % do salário
Diretoria              30%
Gerência              25%
Operacional         20%
Crie uma classe funcionário e um método indicando seu salário/cargo
 e depois um método indicando o empréstimo.

 */

require 'Ex6Funcionario.php';

$joao = new Funcionario();
$joao->setCargo('diretoria');
$joao->setSalario(10000);

$emprestimo = $joao->calculaEmprestimo();

echo "O valor do empréstimo é: $emprestimo";