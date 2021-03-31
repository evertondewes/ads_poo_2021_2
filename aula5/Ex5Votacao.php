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
        if ($this->idade < 16) {
            echo 'Não pode votar';
        } else if ((16 <= $this->idade && $this->idade <= 17) || ($this->idade >= 70)) {
            echo 'É facultativo';
        } else {
            echo 'É obrigatório';
        }
    }
}
