<?php


class Empresa
{
    public $nome;
    public $quantidadeDeSocios;
    public $ramo;
    public $quantidadeDeFuncionarios;
    public $cnpj;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function pagarImpostos()
    {
        $this->calcularImpostos();
        echo 'Pagando Imposto!' . PHP_EOL;
    }

    private function calcularImpostos()
    {
        echo 'Calculando Imposto da ' . $this->nome . PHP_EOL;
    }

    public function prestarServico() {
        echo 'Prestando Servico';
    }

    public function pagarFuncionarios() {
        echo 'Pagando os ' . $this->quantidadeDeFuncionarios . ' funcionarios!' . PHP_EOL;
    }

}
