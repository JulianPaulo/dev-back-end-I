<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

namespace Funcionario;

use Pessoa\Pessoa;

require_once('Pessoa.php');

class Funcionario extends Pessoa
{
    protected $ctps;

    protected $salario;

    public function __construct($nome, $endereco, $email, $dataCadastro, $ctps, $salario)
    {
        parent::__construct($nome, $endereco, $email, $dataCadastro);
            $this->setCtps($ctps);
            $this->setSalario($salario);
    }

    private function getCtps()
    {
        return $this->ctps;
    }

    private function setCtps($ctps): bool
    {
        if (is_string($ctps)) {
            $this->ctps = $ctps;
            return true;
        } else {
            return false;
        }
    }

    public function getSalario()
    {
        return $this->salario;
    }

    private function setSalario($salario): bool
    {
        if (is_float($salario)) {
            $this->salario = $salario;
            return true;
        } else {
            return false;
        }
    }

    public function aumentoSalario($valor): bool
    {
        if (is_float($valor) > 0) {
            $this->setSalario($this->salario + $valor);
            return true;
        } else {
            return false;
        }
    }

    public function exibeDados()
    {
    }
}
