<?php
$campeos_mundiais = array(
    "Santos", "Flamengo", "Grêmio",
    "São Paulo", "Internacional", "Corinthians"
);

$time = "São Paulo";


function valida_time($time, $campeos_mundiais){
    if(in_array($time, $campeos_mundiais)){
        return true;
    }
    else{
        return false;
    }
}

if(valida_time($time, $campeos_mundiais)){
    echo "Seu time foi campeão mundial";
}else{
    echo "Seu time não foi campeão mundial";
}

/*
A função in_array valida se um valor valor existe dentro de um array. Você não
pode confundir in_array com isset pois isset é usada para validar se um índice foi
setado. No caso do array citado na questão, os nomes dos times são valores. Esta
função é muito utilizada e por isso se você ainda não conhecia é importante que
pratique muitas atividades com ela.
*/

