<?php

require_once 'Pessoa.php';
require_once 'Juridica.php';
require_once 'Fisica.php';

$e = new Fisica();

$e->setNome('Everton');

$e->imprimirNome();

$kemp = new Juridica();
$kemp->setNome('Kempers');
$kemp->imprimirNome();

$frig = new Juridica();
$frig->setNome('Callegaro');
$frig->imprimirNome();