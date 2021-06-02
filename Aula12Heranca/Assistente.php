<?php


/*
 . crie a classe Assistente, que também é um funcionário, e que possui um número de
matrícula (faça o método GET). Sobrescreva o método exibeDados().

 */
require_once 'Funcionario.php';

class Assistente extends Funcionario
{
    protected $numMatricula;

    public function getNumMatricula() {
        return $this->numMatricula;
    }

    public function exibeDados() {
        parent::exibeDados();
    }
}