<?php
$carros = array("Focus", "Fusca", "Fiesta", "Ka", "Belina");

foreach ($carros as $carro){
    if($carro == "Fusca"){
        continue; //inicia o laço novamente, e não faz o passo abaixo
    }
    if($carro == "Ka"){
        break; // Sai do laço
    }
    echo $carro;
}

//Resultado: FocusFiesta