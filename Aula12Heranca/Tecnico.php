<?php

require_once 'Assistente.php';



class Tecnico extends Assistente
{
    protected $bonusSalarial;

    public function __construct($nome, $matricula = null)
    {
        echo 'Tecnico ';
        parent::__construct($nome, $matricula);
    }

    public function getBonusSalarial()
    {
        return $this->bonusSalarial;
    }

    public function setBonusSalarial($bonusSalarial)
    {
        $this->bonusSalarial = $bonusSalarial;
    }

    public function __destruct()
    {
        parent::__destruct();
        echo ' do técnico: ' . $this->getNome() .PHP_EOL;
    }
}

