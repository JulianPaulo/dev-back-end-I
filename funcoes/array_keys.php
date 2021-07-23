<?php
$automovel = array(
    'marca' => 'Ford',
    'modelo' => 'Focus',
    'ano' => 2017
);

if (array_key_exists('modelo', $automovel)){
    echo "Existe a chave modelo.";
}
echo "<br/>";
$automovel_chaves = array_keys($automovel);
var_dump($automovel_chaves);
echo "<br/>";

$automovel_valores = array_values($automovel);
var_dump($automovel_valores);

//Resultado:
//Existe a chave modelo.
//array(3) { [0]=> string(5) "marca" [1]=> string(6) "modelo" [2]=> string(3) "ano" }

//array(3) { [0]=> string(4) "Ford" [1]=> string(5) "Focus" [2]=> int(2017) }