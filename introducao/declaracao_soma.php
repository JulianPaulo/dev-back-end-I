<?php

/*
A declaração dos valores pode até causar uma ligeira confusão, mas como o PHP tem variáveis com tipagem automática no momento de uma multiplicação e soma o PHP converterá os valores para números. Neste caso, o único detalhe é que assim como em uma operação matemática padrão, a multiplicação tem prioridade sobre a soma de modo que $numero2 * $numero3 será
executado primeiramente resultando em 24 e só em seguida a soma com $numero1 resultando em 36.50 será obtida. Esta atividade é apenas um lembrete
de atenção e análise.

*/
$numero1= 12.50;
$numero2 = "12";
$numero3 = 2.00;

$resultado = $numero1+ $numero2 * $numero3;

echo $resultado;

//Exibe 36.5