<?php


class Animal
{
    protected $dataNascimento;

    protected function setDataNascimento($data) {
        echo "Colocando a data de nascimento: $data" . PHP_EOL;;
        $this->dataNascimento = $data;
    }

}