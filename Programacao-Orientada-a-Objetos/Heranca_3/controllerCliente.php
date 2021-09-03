<?php

use Cliente\Cliente;

require_once('class/Cliente.php');

$paciente = new Cliente(
    "Rafael Florindo",
    "Rua 1",
    "rafaelflorindo@emai.com",
    "2010-05-24",
    "12345678909"
);

$results = $paciente->exibeDados();
echo $results;

/*
Retorno:

{
  "nome": "Rafael Florindo",
  "cpf": "12345678909",
  "endereco": "Rua 1",
  "email": "rafaelflorindo@emai.com",
  "dataCadastro": "2010-05-24"
}

*/
