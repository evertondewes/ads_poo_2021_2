<?php


class Disciplina
{

    public $nome;
    public $codigo;
    public $maxAlunos;
    public $cargaHoraria;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function descreverDisciplina() {
        echo 'Essa é a disciplina de ' . $this->nome . ' e o código é ' . $this->codigo
                . ' com um máximo de alunos de ' . $this->maxAlunos . ' e a carga é de ' . $this->cargaHoraria . ' horas' . PHP_EOL;
    }

}
