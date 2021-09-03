<?php

use Medico\Medico;

require_once('class/Medico.php');

$medico = new Medico(
    "Rafael Florindo",
    "Rua 1",
    "rafaelflorindo@emai.com",
    "2010-05-24",
    "ctps 123",
    4500.85,
    "CRM 45789"
);

$results = $medico->exibeDados();
echo $results;
echo "</br>";
$medico->aumentoSalario(1200.25);
echo "Novo Salário: " . $medico->getSalario();

/*
Resultado:
{
  "nome": "Rafael Florindo",
  "endereco": "Rua 1",
  "email": "rafaelflorindo@emai.com",
  "ctps": "ctps 123",
  "crm": "CRM 45789",
  "salario": 4500.850000000000363797880709171295166015625,
  "dataCadastro": "2010-05-24"
}

Novo Salário: 5701.1

*/
