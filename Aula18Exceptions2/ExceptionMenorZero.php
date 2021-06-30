<?php


class ExceptionMenorZero extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = "Só se pode $message maiores que zero" . PHP_EOL;
        parent::__construct($message, $code, $previous);
    }

}