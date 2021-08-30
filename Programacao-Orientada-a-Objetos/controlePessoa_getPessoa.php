<?php
require_once('Pessoa_getPessoa.php'); 

$pessoa = new Pessoa_getPessoa(); 

$pessoa->nome = "Rafael A. Florindo";
$pessoa->email = "rafaelflorindo@hotmail.com";
$pessoa->telefone = "44 3027-9390";
$pessoa->dataNascimento = "2020-08-14";


echo "<div><strong>Dados da Pessoa</strong></br>";
$pessoa->getPessoa();
echo "</div>";


/*
Resultado:

Dados da Pessoa
Nome: Rafael A. Florindo
Email: rafaelflorindo@hotmail.com
Telefone: 44 3027-9390
Data Nascimento: 2020-08-14
*/
?>