<?php


class Funcionario
{
    public $cargo = null;
    public $salario = 0;

    function setSalario(int $salario)
    {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo 'O salário deve ser maior que zero!';
        }
    }

    function setCargo(string $cargo)
    {
        $arrCargos = ['diretoria', 'gerencia', 'operacional'];

        if(in_array($cargo, $arrCargos)) {
            $this->cargo = $cargo;
        } else {
            echo 'Cargo não disponível!';
        }
    }

    function calculaEmprestimo() : float {
        switch ($this->cargo) {
            case 'diretoria':
                return ($this->salario * 0.3);
                break;
            case 'gerencia':
                return ($this->salario * 0.25);
                break;
            case 'operacional':
                return ($this->salario * 0.20);
                break;
            default:
                echo 'Erro, cargo não definido!';
        }
    }
}