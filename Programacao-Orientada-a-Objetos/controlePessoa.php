<?php
require_once('Pessoa.php'); //Notem que, na primeira linha, utilizamos o comando (require_once(‘classes/Pessoa.php’);) para incluir a classe Pessoa que está dentro da pasta classes. 

$pessoa = new Pessoa(); // Na sequência, instanciamos o objeto $pessoa com o comando ($pessoa = new Pessoa();). 

$pessoa->nome = "Rafael A. Florindo";
$pessoa->email = "rafaelflorindo@hotmail.com";
$pessoa->telefone = "44 3027-9390";
$pessoa->dataNascimento = "2020-08-14";

/*
. Para acessar os atributos fora da classe, devemos utilizar o próprio objeto
seguido por uma seta (->), que aponta para a sua propriedade, setando ou
resgatando o valor, por exemplo: ($pessoa->nome = “Rafael A. Florindo”;
echo “Nome: “ . $pessoa->nome;). 
*/
echo "<div><strong>Dados da Pessoa</strong></br>";
echo "Nome: " . $pessoa->nome . "</br>";
echo "Email: " . $pessoa->email . "</br>";
echo "Telefone: " . $pessoa->telefone . "</br>";
echo "Data Nascimento: " . $pessoa->dataNascimento. "</br>";
echo "</div>";

/*
Note que só é possível acessar esses atributos dessa forma porque eles
estão com visibilidade pública. 
*/

/*
Resultado:

Dados da Pessoa
Nome: Rafael A. Florindo
Email: rafaelflorindo@hotmail.com
Telefone: 44 3027-9390
Data Nascimento: 2020-08-14
*/
?>