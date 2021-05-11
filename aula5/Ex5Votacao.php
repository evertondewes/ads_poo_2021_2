<?php

/*
 A partir da idade informada de um cidadão diga se ele não pode votar
(idade inferior a 16), ou se o voto é facultativo
(idade igual a 16 ou 17 ou ainda maior do que 70),
ou ainda se o voto é obrigatório para idades entre 18 e 70
(incluindo estes valores). Crie um método para receber cada
valor e armazene ele em um atributo.
Depois um método para aplicar a regra e indicar se o voto é facultativo ou obrigatório.
 */

class Votar
{
    public $idade = 0;

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function votoObrigatorio()
    {
        if ($this->idade < 18) {
            echo 'Não pode votar,';
        } else if ((18 <= $this->idade && $this->idade <= 21) || ($this->idade >= 80)) {
            echo 'É facultativo,';
        } else {
            echo 'É obrigatório,';
        }
    }
}

$joao = new Votar();
$joao->setIdade(17);
$joao->votoObrigatorio();

$pedro = new Votar();
$pedro->setIdade(78);
$pedro->votoObrigatorio();

$mateus = new Votar();
$mateus->setIdade(32);
$mateus->votoObrigatorio();