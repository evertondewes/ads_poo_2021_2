<?php


class Vendas
{
    public $vendasTotais = [];

    public function informaVenda($nome, $totalVenda)
    {
        $this->vendasTotais[$nome] = $totalVenda;
    }

    public function exibirComissao()
    {
        $totalGeral = 0;
        foreach ($this->vendasTotais as $nome => $totalVenda)
        {
            echo "O vendedor $nome vendeu $totalVenda e a comissão é: " . ($totalVenda * 0.1) . PHP_EOL;
            $totalGeral += $totalVenda;
        }
        echo "O total vendido foi de $totalGeral" . PHP_EOL;
        echo 'A média das vendas foi de: ' . ($totalGeral / count($this->vendasTotais));
    }
}