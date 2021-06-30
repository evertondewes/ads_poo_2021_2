<?php

require_once 'ObjetoGeometrico.php';
require_once 'Circulo.php';
require_once 'CirculoRedimensionavel.php';
require_once 'CalculoArea.php';
require_once 'Quadrado.php';
require_once 'QuadradoRedimensionavel.php';

$arrObjetos = [];

$circulo1 = new Circulo(10);

$arrObjetos[] = $circulo1;
//echo 'O raio do circulo é:' . $circulo1->getRaio() . PHP_EOL;
//echo 'A área do circulo é:' . $circulo1->getArea() . PHP_EOL;
//echo 'O perímetro do circulo é:' . $circulo1->getPerimetro() . PHP_EOL;

$circuloRedimensionavel1 = new CirculoRedimensionavel(20);


//echo 'O raio do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getRaio() . PHP_EOL;
//echo 'A área do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getArea() . PHP_EOL;
//echo 'O perímetro do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getPerimetro() . PHP_EOL;

$circuloRedimensionavel1->redimensionar(0.8);

$arrObjetos[] = $circuloRedimensionavel1;
//echo 'O raio do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getRaio() . PHP_EOL;
//echo 'A área do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getArea() . PHP_EOL;
//echo 'O perímetro do Circulo Redimensionavel é:' . $circuloRedimensionavel1->getPerimetro() . PHP_EOL;

$arrObjetos[] = new CirculoRedimensionavel(4);

$arrObjetos[] = new Quadrado(4);

$arrObjetos[] = new Quadrado(8);

$arrObjetos[] = new QuadradoRedimensionavel(7);

$arrObjetos[] = new QuadradoRedimensionavel(3);

$calculadora = new CalculoArea();

$areaTotal = $calculadora->getAreaTotal(...$arrObjetos);
$perimetroTotal = $calculadora->getPerimetroTotal(...$arrObjetos);

echo '------------' . PHP_EOL;
echo 'A área total é: ' . $areaTotal .PHP_EOL;
echo 'O perímetro total é: ' . $perimetroTotal .PHP_EOL;
