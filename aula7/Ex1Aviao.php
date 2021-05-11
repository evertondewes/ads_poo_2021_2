<?php


class Aviao
{
    private $velocidade = 0;
    private $modelo = null;

    private $modelosPossiveis = ['Airbus 747', 'Tecoteco', 'Turboélice', 'Boeing'];

    public function setModelo($modelo)
    {
        if (in_array($modelo, $this->modelosPossiveis)) {
            $this->modelo = $modelo;
        } else {
            echo 'Modelo não disponível' . PHP_EOL;
        }
    }

    public function setVelocidade($velocidade)
    {
        if ($this->verficaVelocidadePositiva($velocidade)) {
            if ($this->verificaVelocidadeModelo($velocidade)) {
                $this->velocidade = $velocidade;
            } else {
                echo 'Velocidade incompatível' . PHP_EOL;
            }
        } else {
            echo 'A velocidade deve ser maior ou igual a zero!' . PHP_EOL;
        }
    }

    protected function verficaVelocidadePositiva($velocidade)
    {
        if ($velocidade < 0) {
            return false;
        } else {
            return true;
        }
    }

    protected function verificaVelocidadeModelo($velocidade)
    {
        switch ($this->modelo) {
            case  'Airbus 747':
                if ($velocidade > 1000) {
                    return false;
                } else {
                    return true;
                }
                break;
            case  'Tecoteco':
                if ($velocidade > 2000) {
                    return false;
                } else {
                    return true;
                }
                break;
            case  'Turboélice':
                if ($velocidade > 3000) {
                    return false;
                } else {
                    return true;
                }
                break;
            case  'Boeing':
                if ($velocidade > 100) {
                    return false;
                } else {
                    return true;
                }
                break;
            default:
                echo 'Modelo ainda não definido' . PHP_EOL;
                return false;
        }
    }
}