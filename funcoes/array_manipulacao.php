<?php
$nomes = array("Eduardo", "Danillo", "Rafael", "Eduardo", "Victor");

var_dump($nomes);
echo "<br/>";
array_pop($nomes); //Retira o último elemento
echo "<br/>";
var_dump($nomes);
echo "<br/>";
array_push($nomes, "Arthur"); //Coloca o elemento na ultima posição
echo "<br/>";
var_dump($nomes);
echo "<br/>";
$nomes_unicos = array_unique($nomes); //Exibe os nomes sem repetição
var_dump($nomes_unicos);
echo "<br/>";

/*

array(5) { [0] => string(7) "Eduardo" [1]=> string(7) "Danillo" [2]=> string(6) "Rafael" [3]=> string(7) "Eduardo" [4]=>
string(6) "Victor" }

array(4) { [0] => string(7) "Eduardo" [1]=> string(7) "Danillo"
[2]=> string(6) "Rafael" [3]=> string(7) "Eduardo" }

array(4) { [0] => string(7) "Eduardo" [1]=> string(7) "Danillo" [2]=> string(6) "Rafael" [3]=> string(7) "Eduardo" [4]=>
string(6) "Arthur" }

array(5) { [0]=> string(7) "Eduardo" [1]=> string(7) "Danillo" [2]=> string(6) "Rafael" [3]=> string(7) "Eduardo" [4]=>
string(6) "Arthur" }

array(4) {[0]=> string(7) "Eduardo" [1]=> string(7) "Danillo"
[2] => string(6) "Rafael" [4] => string(6) "Arthur" }

*/