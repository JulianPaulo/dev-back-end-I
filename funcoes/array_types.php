<?php
$dados = array("nome" => "Rafael", "idade" => 38);
$dados1 = array(0 => "Rafael", 1 => 38);
$dados2 = array("Rafael", 38);
$dados3 = array("nome" => "Rafael", "idade" => 38, "tarefas" => array("Aula 1", "Aula 2"));

var_dump($dados);
echo "<br/>";
var_dump($dados1);
echo "<br/>";
var_dump($dados2);
echo "<br/>";
var_dump($dados3);
