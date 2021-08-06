<?php
$estados = array("PR", "RJ", "MG");

$capitais = array(
  "" => "Capital Não Encontrada",
  "PR" => "Curitiba",
  "RJ" => "Rio de Janeiro",
  "MG" => "Belo Horizonte"
);

echo $capitais[$estados[1]];

//Exibe Rio de Janeiro