<?php

$nivel_agua = 24;
$limite_agua = 20;

if ($nivel_agua > 100) {
    echo "O reservatório está acima de 100%";
}

if ($nivel_agua > $limite_agua) {
    echo "O nível da água está acima do limite";
} else {
    echo "O nível da água está igual ou abaixo do limite";
}

if ($nivel_agua < 10) {
    echo "O nível da água está quase acabando";
} else if ($nivel_agua < 5) {
    echo "Se não economizar vai acabar.";
} else if ($nivel_agua <= 0) {
    echo "Acabou...";
}

//Resultado: O nível da água está acima do limite