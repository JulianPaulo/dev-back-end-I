<?php

/*
quando for necessário declararmos valores faremos uso de aspas simples ou duplas. A diferença fundamental entre elas que é que as aspas duplas são interpretadas pelo
PHP enquanto que, com o uso de aspas simples, o PHP não realiza a interpretação do código interno, caso haja
*/
$nome = "Eduardo";
$sobrenome = "Bona";
var_dump("Meu nome é $nome $sobrenome. ");
echo "<br/>";
var_dump('Meu nome é $nome $sobrenome. ');

/*
Resultado:
string(26) "Meu nome é Eduardo Bona. "

string(30) "Meu nome é $nome $sobrenome. "
*/