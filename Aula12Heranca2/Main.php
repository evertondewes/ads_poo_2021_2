<?php

/*
 b. crie um animal do tipo cachorro e faça-o latir. Crie um gato e faça-o miar. Faça os
dois animais caminharem.
 */

require_once 'Animal.php';
require_once 'Gato.php';
require_once 'Cachorro.php';

$c = new Cachorro();
$c->late();

$g = new Gato();
$g->mia();

$c->caminha();
$g->caminha();

//c. teste (como quiser) as classes Rica, Pobre e Miseravel.
require_once 'Rica.php';
require_once 'Pobre.php';
require_once 'Miseravel.php';
$r = new Rica();
$p = new Pobre();
$m = new Miseravel();

$r->fazCompras();
$p->trabalha();
$m->mendiga();