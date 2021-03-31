<?php

require 'Aviao.php';
require 'Moto.php';
require 'Animal.php';
require 'BancoDados.php';
require 'Cavalo.php';
require 'Joia.php';
require 'Fazenda.php';
require 'Mesa.php';
require 'Celular.php';
require 'Software.php';


$b747 = new Aviao();

$b747->decolar();

$harley = new Moto();

$zebra = new Animal();
$zebra->setEspecie('Zebra');


$leao = new Animal();
$leao->setEspecie('Leão');
$leao->apresentaEspecie();