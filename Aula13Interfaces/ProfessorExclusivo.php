<?php

require_once 'Professor.php';
require_once 'Programador.php';


class ProfessorExclusivo implements Professor
{
    public function corrirProvas()
    {
        echo 'Professor Exclusivo corrigindo provas' . PHP_EOL;
    }

    public function lecionar()
    {
        echo 'Professor Exclusivo Lecionando' . PHP_EOL;
    }

    public function escreverArtigos()
    {
        echo 'Professor Exclusivo Escrevendo Artigos' . PHP_EOL;
    }
}