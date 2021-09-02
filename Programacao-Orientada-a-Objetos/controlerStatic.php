<?php
include('ExemploStatic.php');

echo "</br>Acessando direto o atributo " . ExemploStatic::$vontagem; /* Vejam que, quando executo a instrução ExemploStatic::$voltagem;,
acessamos, de forma direta, a variável estática, dessa forma, não é necessário instanciar a classe. */

$teste = new ExemploStatic();

echo "</br>Acessando o atributo por meio da classe " .$teste->valorEstatico();

/*
RESULTADO:
Acessando direto o atributo 220
Acessando o atributo por meio da classe 220
*/
?>