<?php

use Enfermagem\Enfermagem;

require_once('class/Enfermagem.php');

$enfermagem = new Enfermagem(
    "Rafael Florindo",
    "Rua 1",
    "rafaelflorindo@emai.com",
    "2010-05-24",
    "ctps 123",
    4500.85,
    "COREN 45789"
);
$results = $enfermagem->exibirDados();
echo $results;
echo "</br>";
$enfermagem->aumentoSalario(200.25);
echo "Novo Salário: " . $enfermagem->getSalario();

/*
Resultado:

{
  "nome": "Rafael Florindo",
  "endereco": "Rua 1",
  "email": "rafaelflorindo@emai.com",
  "ctps": "ctps 123",
  "coren": "COREN 45789",
  "dataCadastro": "2010-05-24"
}

Novo Salário: 4701.1

*/
