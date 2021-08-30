<?php
require_once('Pessoa.php'); 

$pessoa = new Pessoa; 

var_dump($pessoa);


/*
Resultado:

object(Pessoa)#1 (4) {
 ["nome"]=>
 NULL
 ["email"]=>
 NULL
 ["telefone"]=>
 NULL
 ["dataNascimento"]=>
 NULL
}
*/
?>