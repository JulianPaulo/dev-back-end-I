<?php
/*
Usamos a função var_dump sempre que for necessário verificarmos o valor e
o tipo atribuído a uma variável durante o desenvolvimento de código. É uma
informação muito importante para o desenvolvedor, mas para o usuário a saída
sempre deve ser tratada com o uso dos comandos de saída echo ou print.
*/

$nome = 'Eduardo';
$sobrenome = "Bona";
$ano_nascimento = 1986;
$altura = 1.71;
$hobbies = array('futebol', 'bateria', 'csgo', 'war');

var_dump($nome);
echo "<br/>";
var_dump($sobrenome);
echo "<br/>";
var_dump($ano_nascimento);
echo "<br/>";
var_dump($altura);
echo "<br/>";
var_dump($hobbies);
echo "<br/>";

/*
Resultado:

string(7) "Eduardo"

string(4) "Bona"

int(1986)

float(1.70999999999999996447286321199499070644378662109375)

array(4) { [0]=> string(7) "futebol" [1]=> string(7) "bateria" [2]=> string(4) "csgo" [3]=> string(3) "war" } 
 */
