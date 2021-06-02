<?php

require_once 'ProfessorExclusivo.php';
require_once 'Professor.php';

class CadeiraProgramacao
{

    public function aulaProgramacao(Professor $p)
    {
        $p->lecionar();
    }
}