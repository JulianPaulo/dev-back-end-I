<?php
require_once('Pessoa_Construtor.php');  

$nome = "Rafael A. Florindo";
$email = "rafaelflorindo@hotmail.com";
$telefone = "44 3027-9390";
$dataNascimento = "2020-08-14";

$pessoa = new Pessoa_Construtor($nome, $email, $telefone, $dataNascimento); 

var_dump($pessoa);


/*
Resultado:

object(Pessoa)#1 (4) {
 ["nome"]=>
 string(18) "Rafael A. Florindo"
 ["email"]=>
 string(26) "rafaelflorindo@hotmail.com"
 ["telefone"]=>
 string(12) "44 3027-9390"
 ["dataNascimento"]=>
 string(10) "2020-08-14"
}
*/
?>