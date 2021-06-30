<?php


class ExcecaoDivizaoPorZero extends Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Não pode dividir por zero', $code, $previous);
    }
}