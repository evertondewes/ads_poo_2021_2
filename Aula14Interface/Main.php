<?php

require_once 'ObjetoGeometrico.php';
require_once 'Circulo.php';
require_once 'CirculoRedimensionavel.php';

$circulo1 = new Circulo(10);

echo 'O raio do circulo é:' . $circulo1->getRaio() . PHP_EOL;
echo 'A área do circulo é:' . $circulo1->getArea() . PHP_EOL;
echo 'O perímetro do circulo é:' . $circulo1->getPerimetro() . PHP_EOL;

$circuloRedimensionavel1 = new CirculoRedimensionavel(20);


echo 'O raio do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getRaio() . PHP_EOL;
echo 'A área do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getArea() . PHP_EOL;
echo 'O perímetro do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getPerimetro() . PHP_EOL;

$circuloRedimensionavel1->redimensionar(30);

echo 'O raio do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getRaio() . PHP_EOL;
echo 'A área do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getArea() . PHP_EOL;
echo 'O perímetro do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getPerimetro() . PHP_EOL;
