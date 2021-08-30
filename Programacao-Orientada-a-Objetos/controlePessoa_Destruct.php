<?php
require_once('Pessoa2.php');


$nome = "Rafael A. Florindo";
$email = "rafaelflorindo@hotmail.com";
$telefone = "44 3027-9390";
$dataNascimento = "2020-08-14";

$pessoa = new Pessoa2($nome,$email,$telefone,$dataNascimento);

echo "<div><strong>Dados da Pessoa</strong></br>";
$pessoa->getPessoa();
echo "</div>";

echo "</br></br>";
$pessoa->__destruct();

/*
Resultado:
Dados da Pessoa
...

Objeto finalizado!!!Objeto finalizado!!!
/*
?>