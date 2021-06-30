<?php


class ExceptionSacarValoresLimite extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Só se pode sacar valores dentro do limite!', $code, $previous);
    }

}