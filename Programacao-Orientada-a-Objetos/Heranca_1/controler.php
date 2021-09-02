<?php
require_once('class/Fisica.php');

$pessoaFisica = new Fisica("Rafael Florindo", "12345678909", "Rua 1", "rafaelflorindo@email.com", "2010-05-24");

print_r($pessoaFisica);

/*
 * Resultado
 
 Fisica Object
(
 [nome:Fisica:private] => Rafael Florindo
 [cpf:Fisica:private] => 12345678909
 [endereco:protected] => Rua 1
 [email:protected] => rafaelflorindo@emai.com
 [dataCadastro:protected] => 2010-05-24
)

 */