<?php

require_once 'Joia.php';

$colarJoana = new Joia();
$colarJoana->codigo = 123;
$colarJoana->valor = 12;
$colarJoana->material = 'Latão';
$colarJoana->peso = 23;
$colarJoana->tipo = 'Colar';


$colarJoana->penhorar();
