<?php


class Pessoa
{

    private $cpf;

    public function setCPF($cpf)
    {
        $cpf = preg_replace('/\D/', '', $cpf);

        if ($this->validaCPF($cpf)) {
            $this->cpf = $cpf;
        } else {
            echo 'CPF inválido!' . PHP_EOL;
        }
    }

    public function getCPF() : string
    {
        return $this->cpf[0] . $this->cpf[1] . $this->cpf[2] . '.' . $this->cpf[3] . $this->cpf[4] . $this->cpf[5] . '.' . $this->cpf[6] . $this->cpf[7] . $this->cpf[8] . '-' . $this->cpf[9] . $this->cpf[10];
    }

    protected function validaCPF($cpf): bool
    {
        if (strlen($cpf) == 11) {
            $decimalVerificador = (($cpf[0] * 10 + $cpf[1] * 9 + $cpf[2] * 8 + $cpf[3] * 7 + $cpf[4] * 6 + $cpf[5] * 5 + $cpf[6] * 4 + $cpf[7] * 3 + $cpf[8] * 2) * 10) % 11;
            $unidadeVerificador = (($cpf[0] * 11 + $cpf[1] * 10 + $cpf[2] * 9 + $cpf[3] * 8 + $cpf[4] * 7 + $cpf[5] * 6 + $cpf[6] * 5 + $cpf[7] * 4 + $cpf[8] * 3 + $cpf[9] * 2) * 10) % 11;

            $digitoVerificadorCalculado = $decimalVerificador . $unidadeVerificador;
            $digitoVerificadorRecebido = $cpf[9] . $cpf[10];

            if ($digitoVerificadorCalculado == $digitoVerificadorRecebido) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}