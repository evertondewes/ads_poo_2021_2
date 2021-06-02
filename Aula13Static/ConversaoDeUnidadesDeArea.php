<?php
/*
 * 2) Escreva a classe ConversaoDeUnidadesDeArea com métodos estáticos para conversão das unidades de área segundo a lista abaixo.
• 1 metro quadrado = 10,76 pés quadrados
• 1 pé quadrado = 929 centímetros quadrados
• 1 milha quadrada = 640 acres
• 1 acre = 43,560 pés quadrados.
 */

class ConversaoDeUnidadesDeArea
{
    public static function metroParaPes(float $metros): float
    {
        return $metros * 10.76;
    }

    public static function peParaCentimetros(float $pes): float
    {
        return $pes * 929;
    }

    public static function milhaParaAcre(float $milha): float
    {
        return $milha * 640;
    }

    public static function acreParaPes(float $acre): float
    {
        return $acre * 43560;
    }
}