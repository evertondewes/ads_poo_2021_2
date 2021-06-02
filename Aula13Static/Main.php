<?php

require_once 'ConversaoDeUnidadesDeArea.php';
require_once 'ConversaoDeUnidadesDeTempo.php';

$dias = readline("Entre o número de dias para serem convertidos em segundos:");

echo 'O total em segundos é: ' .ConversaoDeUnidadesDeTempo::minutosParaSegundos(ConversaoDeUnidadesDeTempo::horaParaMinutos(ConversaoDeUnidadesDeTempo::diaParaHoras($dias))) . PHP_EOL;

$metros = readline("Metros quadrados para serem convertidos em Pés quadrados: ");

echo "O total de pés quadrados são: " . ConversaoDeUnidadesDeArea::metroParaPes($metros) . PHP_EOL;

$milha = readline("Milhas quadradas para serem convertidos em Acres quadrados: ");

echo "O total de milhas quadradas são: " . ConversaoDeUnidadesDeArea::milhaParaAcre($milha) . PHP_EOL;