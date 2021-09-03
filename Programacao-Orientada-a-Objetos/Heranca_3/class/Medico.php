<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

namespace Medico;

use Funcionario\Funcionario;

require_once('Funcionario.php');

class Medico extends Funcionario
{
    private $crm;

    public function __construct($nome, $endereco, $email, $dataCadastro, $ctps, $salario, $crm)
    {
        parent::__construct($nome, $endereco, $email, $dataCadastro, $ctps, $salario);
        $this->setCrm($crm);
    }

    private function getCrm()
    {
        return $this->crm;
    }

    private function setCrm($crm): bool
    {
        if (is_string($crm)) {
            $this->crm = $crm;
            return true;
        } else {
            return false;
        }

        return $this;
    }

    public function exibeDados()
    {
        $dados = [
            "nome" => $this->nome,
            "endereco" => $this->endereco,
            "email" => $this->email,
            "ctps" => $this->ctps,
            "crm" => $this->crm,
            "salario" => $this->salario,
            "dataCadastro" => $this->dataCadastro
        ];
        return json_encode($dados);
    }

    public function aumentoSalario($valor): bool
    {
        if (parent::aumentoSalario($valor)) {
            return true;
        } else {
            return false;
        }
    }
}
