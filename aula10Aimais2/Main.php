<?php

/*
Crie as classes ‘animal’, ‘cachorro’, ‘gato’ e ‘coelho’.
Crie 2 atributos e 2 métodos em cada uma. Faça as classes herdarem os
atributos e métodos da classe ‘animal’, Crie instâncias e chame os métodos.,
*/

require_once 'Cachorro.php';
require_once 'Coelho.php';
require_once 'Gato.php';

$felix = new Gato();
$felix->nascer('Felix', 123);

$layca = new Cachorro();
$layca->nascer('Layca', 657);
$layca->latir();
$layca->marcarTerritorio();
$layca->morrer();



$pernaLonga = new Coelho();
$pernaLonga->morrer();




