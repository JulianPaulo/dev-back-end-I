<?php
require_once('Mesa_Encapsulamento.php');

$mesa1 = new Mesa_Encapsulamento();

if($mesa1->adicionarMesa(4, "Madeira Rústica", "Retangular")){
    echo "</br>Mesa cadastrada:</br></br>" .$mesa1->mostrarMesa();
}else{
    echo "Ocorreu um erro ao cadastrar a mesa!!!";
}

/*
Resultado:
Mesa cadastrada:
Mesa Retangular com 4 pernas, do tipo Madeira Rústica

*/