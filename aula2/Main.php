<?php

require "Empresa.php";

$cnec = new Empresa();

$kampers = new Empresa();

//$cnec->nome = 'Faculdade CNEC';
//$cnec->cnpj = '000123123123';
//$kampers->nome = 'Doceria Kampers';

$kampers->setNome('Doceria Kampers');
$kampers->quantidadeDeFuncionarios = 10;
$kampers->pagarImpostos();
$kampers->pagarFuncionarios();

$cnec->setNome('Faculdade CNEC');
$cnec->quantidadeDeFuncionarios = 40;
$cnec->pagarImpostos();
$cnec->pagarFuncionarios();

echo print_r($cnec, true) . PHP_EOL;
echo print_r($kampers, true) . PHP_EOL;

