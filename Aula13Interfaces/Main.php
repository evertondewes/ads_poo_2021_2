<?php


require_once 'ProfessorExclusivo.php';
require_once 'ProfessorHorista.php';
require_once 'CadeiraProgramacao.php';
require_once 'DesenvolverSistemaCNEC.php';

$Marilei = new ProfessorExclusivo();

$Everton = new ProfessorHorista();


$PRO2343 = new CadeiraProgramacao();

$PRO2343->aulaProgramacao($Marilei);

$cnec = new DesenvolverSistemaCNEC();

$cnec->programarSistema($Marilei);

