<?php
$cidades = array('Maringa' => 1000, 'Sarandi' => 500);
echo "Quantidade de cidades: ";
echo count($cidades);
if (isset($cidades['Maringa'])) {
    echo " e Maringa é um índice na lista";
} else {
    echo " e Maringa não é um índice na lista";
}
echo "<br/>";
// tirando Maringa da lista
unset($cidades['Maringa']);
if(isset($cidades['Maringa'])){
    echo " e Maringa ainda é um índice na lista";
}else{
    echo " e Maringa já não é um índice na lista";
}
echo "<br/>";

$estados = array("PR", "SP", "AM", "PA", "PI", "MG");
if (in_array('PR', $estados)){
    echo " e por fim PR está presente nos valores da lista de estados";
}else{
    echo " e PR não está na lista";
}

/*
RESULTADO:
Quantidade de cidades: 2 e Maringa é um índice na lista 

e Maringa já não é mais um índice na lista 

e por fim PR está presente nos valores da lista de estados.
*/
