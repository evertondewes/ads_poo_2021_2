<?php

/*

6) Escreva a classe ConversaoDeUnidadesDeTempo com métodos estáticos para conversão aproximada das unidades de
velocidade segundo a lista abaixo.
• 1 minuto = 60 segundos
• 1 hora = 60 minutos
• 1 dia = 24 horas
• 1 semana = 7 dias
• 1 mês = 30 dias
• 1 ano = 365.25 dias

*/

class ConversaoDeUnidadesDeTempo
{

    public static function minutosParaSegundos(float $m): float
    {
        return $m * 60;
    }
    public static function horaParaMinutos(float $h): float
    {
        return $h * 60;
    }
    public static function diaParaHoras(float $d): float
    {
        return $d * 24;
    }
    public static function semanaParaDias(float $s): float
    {
        return $s * 7;
    }
    public static function mesParaDias(float $m): float
    {
        return $m * 30;
    }
    public static function anoParaDias(float $a): float
    {
        return $a * 365.25;
    }
}