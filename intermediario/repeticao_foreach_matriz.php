<?php
//Matrizes são arrays dentro de arrays
$carros = array(
    "ford" => array(
        "Focus", "Fiesta", "Ka"
    ),
    "vw" => array(
        "Fusca"
    )
);

foreach ($carros as $marca => $carros){
    echo "Marca: $marca - ";
    foreach ($carros as $carro){
        echo $carro;
    }
    echo "<br />";
}

//Resultado:
// Marca: ford - FocusFiestaKa
// Marca: vw - Fusca