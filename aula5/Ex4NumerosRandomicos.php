<?php


class Sorteio {
    public function sorteioNumeros() {
        for ($i = 0; $i < 50; $i++) {
            echo "O número $i sorteado é:" .rand(1, 100) . PHP_EOL;
        }
    }
}