<?php
$a = 1;
function imprime_a(){
    $a = 2;
    $a = $a + 5;
    echo $a;
}
imprime_a();
echo $a;

/* Resultado: 71 */