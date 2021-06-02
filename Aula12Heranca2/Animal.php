<?php


class Animal
{

    protected $nome;
    protected $raca;

//    public function Animal($nome = null)
//    {
//        if ($nome != null) {
//            $this->nome = $nome;
//        }
//    }

    public function caminha(): string
    {
        return 'Caminhando....'  . PHP_EOL;
    }
}