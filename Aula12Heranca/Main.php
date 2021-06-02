<?php




require_once 'Funcionario.php';
require_once 'Gerente.php';
require_once 'Assistente.php';
require_once 'Tecnico.php';
require_once 'Administrativo.php';

echo 'Início' . PHP_EOL;

echo 'Total Funcionários:' . Funcionario::getTotal() . PHP_EOL;

$tecnico = new Tecnico('Mario');

$adm = new Administrativo('José', 456);


echo 'Processando' . PHP_EOL;

$tecnico->exibeDados();
$adm->exibeDados();

$tecnico = new Tecnico('Augusto');

unset($tecnico);
unset($adm);

echo 'Total Funcionários:' . Funcionario::getTotal() . PHP_EOL;


