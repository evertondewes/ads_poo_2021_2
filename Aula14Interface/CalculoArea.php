<?php

require_once 'ObjetoGeometrico.php';

class CalculoArea
{
    public function getAreaTotal(ObjetoGeometrico ...$arrObjetosGeometricos) {

        echo 'Tamanho total do array para somar as áreas:' . sizeof($arrObjetosGeometricos) . PHP_EOL;
        $totalArea = 0;

        foreach ($arrObjetosGeometricos as $objetoGeometrico) {
            echo 'Somando: ' . $objetoGeometrico->getArea() . PHP_EOL;
            $totalArea = $totalArea + $objetoGeometrico->getArea();
        }

        return $totalArea;
    }

    public function getPerimetroTotal(ObjetoGeometrico ...$arrObjetosGeometricos) {

        echo 'Tamanho total do array para somar os perímetros:' . sizeof($arrObjetosGeometricos) . PHP_EOL;
        $totalPerimetro = 0;

        foreach ($arrObjetosGeometricos as $objetoGeometrico) {
            echo 'Somando perímetro: ' . $objetoGeometrico->getPerimetro() . PHP_EOL;
            $totalPerimetro += $objetoGeometrico->getPerimetro();
        }

        return $totalPerimetro;
    }
}