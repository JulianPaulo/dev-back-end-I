<?php
abstract class Pessoa2{
    protected $endereco, $email, $dataCadastro;

    function __construct($endereco, $email, $dataCadastro)
    {
        $this->setEndereco($endereco);
        $this->setEmail($email);
        $this->setDataCadastro($dataCadastro);
    }

    private function setEndereco($endereco):bool{
        if(is_string($endereco)){
            $this->endereço = $endereco;
            return true;
        }
        else return false;
    }

    private function setEmail($email):bool{
        if(is_string($email)){
            $this->email = $email;
            return true;
        }
        else return false;
    }

    private function setDataCadastro($dataCadastro):bool{
        if(is_string($dataCadastro)){
            $this->dataCadastro = $dataCadastro;
            return true;
        }
        else return false;
    }

    abstract public function exibirDados();
}

?>