<?php
require_once('class/Fisica2.php');

$pessoaFisica = new Fisica2("Rafael Florindo", "12345678909", "Rua 1", "rafaelflorindo@email.com", "2010-05-24");

$dados = $pessoaFisica->exibirDados();
echo $dados;


/*
 * Resultado
 
{
 "nome": "Rafael Florindo",
 "cpf": "12345678909",
 "endereco": "Rua 1",
 "email": "rafaelflorindo@emai.com",
 "dataCadastro": "2010-05-24"
}

 */