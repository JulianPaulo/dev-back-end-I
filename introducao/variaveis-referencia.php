<?php
/*
Variáveis por referência sempre causarão uma confusão até que se acostume e passe a analisar com mais calma os recebimentos e operações com valores. Na atividade em questão, $numero1 inicialmente recebe 10 e $numero2 passa a receber o valor de $numero1 que é 10 e até aqui, tudo normal. A atividade fica mais complexa quando $numero3 recebe por referência a variável $numero1 e em seguida é incrementada. Isso quer dizer que tanto a variável $numero3 que era 10 quanto a variável $numero1 passaram a ser 11, pois estão vinculadas
por referência. A partir daquele momento, qualquer alteração em $numero1 ou
$numero3 resultariam em ambas. Deste modo, 11+10+11 que seriam os valores
para $numero1, $numero2 e $numero3, respectivamente dariam 32.

*/

$numero1 = 10;
$numero2 = $numero1; //10
$numero3 = &$numero1; //10 -> 11
$numero3++; //11

$resultado = $numero1 + $numero2 + $numero3; // 11 + 10 + 11 = 32

echo $resultado; //32
