<?php
//Arrays com índices como strings
$carros = array(
    array("modelo"=>"Focus", "Fabricacao"=> "2013"),
    array("modelo"=>"Fiesta", "Fabricacao"=> "2015"),
    array("modelo"=>"Fusca", "Fabricacao"=> "1982")
);

foreach($carros as $carro){
    echo "Modelo " .$carro["modelo"];
    echo " e ano " .$carro["Fabricacao"];
    echo "<br />";
}

//Resultado:
//Modelo Focus e ano 2013
//Modelo Fiesta e ano 2015
//Modelo Fusca e ano 1982