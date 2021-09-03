<?php // phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

namespace Cliente;

use Pessoa\Pessoa;

require_once('Pessoa.php');

class Cliente extends Pessoa
{
    protected $cpf;

    public function __construct($nome, $endereco, $email, $dataCadastro, $cpf)
    {
        parent::__construct($nome, $endereco, $email, $dataCadastro);
        $this->setCpf($cpf);
    }

    private function getCpf()
    {
        return $this->cpf;
    }

    private function setCpf($cpf): bool
    {
        if (is_string($cpf) && strlen($cpf) == 11) {
            $this->cpf = $cpf;
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
        "cpf" => $this->cpf,
        "endereco" => $this->endereco,
        "email" => $this->email,
        "dataCadastro" => $this->dataCadastro
        ];
        return json_encode($dados);
    }
}
