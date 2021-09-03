<?php

namespace Pessoa;

abstract class Pessoa
{
    protected $nome;
    protected $endereco;
    protected $email;
    protected $dataCadastro;

    public function __construct($nome, $endereco, $email, $dataCadastro)
    {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setEmail($email);
        $this->setDataCadastro($dataCadastro);
    }

    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome): bool
    {
        if (is_string($nome)) {
            $this->nome = $nome;
            return true;
        } else {
            return false;
        }
    }

    private function getEndereco()
    {
        return $this->endereco;
    }

    private function setEndereco($endereco): bool
    {
        if (is_string($endereco)) {
            $this->endereco = $endereco;
            return true;
        } else {
            return false;
        }
    }

    private function getEmail()
    {
        return $this->email;
    }

    private function setEmail($email): bool
    {
        if (is_string($email)) {
            $this->email = $email;
            return true;
        } else {
            return false;
        }

        return $this;
    }

    private function getDataCadastro()
    {
        return $this->dataCadastro;
    }


    private function setDataCadastro($dataCadastro): bool
    {
        if (is_string($dataCadastro)) {
            $this->dataCadastro = $dataCadastro;
            return true;
        } else {
            return false;
        }
    }

    abstract public function exibeDados();
}
