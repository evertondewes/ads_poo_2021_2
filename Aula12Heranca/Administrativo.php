<?php

require_once 'Assistente.php';

class Administrativo extends Assistente
{
    protected $turno;

    public function getTurno()
    {
        return $this->turno;
    }

    public function setTurno($turno): void
    {
        $this->turno = $turno;
    }
}