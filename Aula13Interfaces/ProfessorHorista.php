<?php
require_once 'Professor.php';
require_once 'Programador.php';

class ProfessorHorista implements Professor, Programador
{

    public function lecionar()
    {
        echo 'Professor Horista lecionando' . PHP_EOL;
    }

    public function corrirProvas()
    {
        echo 'Professor Horista corrigindo provas' . PHP_EOL;
    }

    public function programar($tarefa)
    {
        echo 'Programador Programando' . PHP_EOL;
    }
}