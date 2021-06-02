<?php


class Funcionario
{
    private static $totalFuncionarios = 0;

    protected $nome;
    protected $matricula;

    public function __construct($nome, $matricula)
    {
        $this->setNome($nome);
        $this->setMatricula($matricula);
        echo 'Construindo...' . PHP_EOL;

        Funcionario::$totalFuncionarios = Funcionario::$totalFuncionarios  + 1 ;
    }

    public static function getTotal()
    {
        return self::$totalFuncionarios;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula): void
    {
        $this->matricula = $matricula;
    }

    public function exibeDados()
    {
        echo "Nome: {$this->getNome()} - Matrícula: {$this->getMatricula()} " . PHP_EOL;
    }

    public function __destruct()
    {
        Funcionario::$totalFuncionarios-- ;

        echo 'Liberando a memória...' .PHP_EOL;
    }
}