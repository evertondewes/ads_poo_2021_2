<?php

require_once 'ExceptionMenorZero.php';
require_once 'ExceptionSacarValoresLimite.php';

class ContaCorrente
{
    public $saldo;
    public $valorLimite;
    public $limite = 0;
    public $nomeCliente;

    public function sacar(float $valor)
    {
        if ($valor <= 0) {
            throw new ExceptionMenorZero('sacar valores positivos');
        }
        if ($this->saldo +  $this->valorLimite - $this->limite < $valor) {
            throw new ExceptionSacarValoresLimite();
        }

        if($this->saldo - $valor < 0 ) {
            $this->limite += $valor - $this->saldo ;
            $this->saldo = 0;
        } else {
            $this->saldo -= $valor;
        }

    }

    public function depositar(float $valor)
    {
        if ($valor <= 0) {
            throw new ExceptionMenorZero('depositar valores positivos');
        }

        $this->saldo += $valor;
    }

    public function setValorLimite(float $valorLimite)
    {
        if ($valorLimite <= 0) {
            throw new ExceptionMenorZero('determinar um valor limite de crédito positivos');
        }
        $this->valorLimite += $valorLimite;
    }
}