<?php
require_once('Pessoa2.php');

final class Fisica2 extends Pessoa2
{
    private $nome, $cpf;

    function __construct($nome, $cpf, $endereco, $email, $dataCadastro)
    {
        /*Dentro desse método, chamamos o construtor da classe pai utilizando a palavra-chave especial parent::, que é utilizada para acessar propriedades e métodos dentro de uma definição de classe.  */
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setNome($nome);
        $this->setCpf($cpf);
    }

    private function setNome($nome): bool
    {
        if (is_string($nome)) {
            $this->nome = $nome;
            return true;
        } else return false;
    }

    private function setCpf($cpf): bool
    {
        if (is_string($cpf) && (strlen($cpf) == 11)) {
            $this->cpf = $cpf;
            return true;
        } else return false;
    }

    public function exibirDados()
    {
        $dados = array(
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "endereco" => $this->endereco,
            "email" => $this->email,
            "dataCadastro" => $this->dataCadastro
        );
        return json_encode($dados);
        /*
        trabalharemos com o retorno de um JSON (JavaScript Object Notation ou Notação de Objetos em JavaScript), que nada mais é do
        que um array com uma formatação de dados muito leve, usada bastante na troca de informações entre aplicações, independente da linguagem.
        */
    }
}
