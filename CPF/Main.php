<?php


require 'Pessoa.php';


$everton = new Pessoa();
$everton->setCPF('52998224725');
echo $everton->getCPF() . PHP_EOL;

$pedro = new Pessoa();
$pedro->setCPF('688.557.840-13');
echo $pedro->getCPF() . PHP_EOL;
