<?php

require 'Disciplina.php';

$poo = new Disciplina();
$poo->setNome('Programação Orientada a Objetos');
$poo->codigo = 'XPTO123';
$poo->maxAlunos = 123;
$poo->cargaHoraria = 60;

$algoritmos = new Disciplina();
$algoritmos->setNome('Algoritmos e Programação');
$algoritmos->codigo = 'XPTO345';
$algoritmos->maxAlunos = 22;
$algoritmos->cargaHoraria = 50;

$poo->descreverDisciplina();
$algoritmos->descreverDisciplina();
