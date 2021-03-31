<?php


class Animal
{
    public $especie;
    public $habitat;
    public $alimentacao;
    public $vertebrados; // sim/não

    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }

    public function getEspecie()
    {
        echo 'Verificando se o usuário tem acesso a informação!' . PHP_EOL;
        return $this->especie;
    }

    public function apresentaEspecie()
    {
        echo  'A especie é: '. $this->getEspecie() . PHP_EOL;
    }

}