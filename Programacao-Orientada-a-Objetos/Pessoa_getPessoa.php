<?php

class Pessoa_getPessoa
{
    public $nome;
    public $email;
    public $telefone;
    public $dataNascimento;



    public function getPessoa()
    {
        echo "</br>Nome: " . $this->nome;
        echo "</br>Email: " . $this->email;
        echo "</br>Telefone: " . $this->telefone;
        echo "</br>Data de nascimento: " . $this->dataNascimento;
    }
}

/*
Note que, para referenciar uma de suas propriedades ou métodos dentro de uma
classe, basta utilizar o ponteiro $this para acessá-lo. Esse ponteiro representa o
próprio objeto que estará sendo manipulado.

*/
