<?php

/*
 Crie um classe para o usuário descobrir um número sorteado de 1 a 100.
A cada tentativa dele, forneça uma dica mostrando se o número é maior ou menor.
Quando ele descobrir exiba uma mensagem de parabéns e mostre em quantas tentativas ele conseguiu.
deve ter um método para inicilizar o valor secreto
um método para ler o valor digitado pelo usuário
um método que exiba a mensagem de sucesso e a quantidade de tentativas

 */
define('ACERTOU', 0);
define('MENOR', -1);
define('MAIOR', 1);


class AdivinharNumero
{
    public $numeroSorteado = 0;
    public $numeroTentativas = 0;

    public function sortearNumero()
    {
        $this->numeroSorteado = rand(1, 100);
    }

    public function tentandoAcertar($numeroEscolhido) : int
    {
        $this->numeroTentativas++;

        if($numeroEscolhido == $this->numeroSorteado) {
            return ACERTOU;
        } elseif ($this->numeroSorteado > $numeroEscolhido) {
            return MAIOR;
        } else {
            return MENOR;
        }
    }

    public function mensagemSucesso() {
        echo 'Parabéns você acertou. Total de tentativas: ' . $this->numeroTentativas;
    }
}