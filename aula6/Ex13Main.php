<?php


require 'Ex13Vendas.php';

$v = new Vendas();

$v->informaVenda('João', 1234);
$v->informaVenda('Pedro', 100);
$v->informaVenda('Márcio', 200);
$v->informaVenda('Pedro', 400);
$v->informaVenda('Augusto', 600);

$v->exibirComissao();