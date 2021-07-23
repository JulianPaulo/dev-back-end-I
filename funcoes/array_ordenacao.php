<?php
$nomes = array ("Eduardo", "Rafael", "Arthur", "Danillo");
sort($nomes); // ordenando crescente
var_dump($nomes);
echo "<br/>";
rsort($nomes); // ordenando decrescente
var_dump($nomes);
echo "<br/>";
/*
RESULTADO:
array(4) { [0]=> string(6) "Arthur" [1]=> string(7) "Danillo" [2]=> string(7) "Eduardo" [3]=> string(6) "Rafael" }

array(4) { [0]=> string(6) "Rafael" [1]=> string(7) "Eduardo" [2]=> string(7) "Danillo" [3]=> string(6) "Arthur" }
*/