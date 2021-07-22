<?php
//$GLOBALS referencia todas as variáveis disponíveis no escopo global retornando um array de índices com as variáveis disponívels. O escopo das variáveis geralmente será notado quando estiver criando funções e houver algum conflito entre demandas externas e internas.
function imprimir(){
    $mensagem = "Oi";
    echo $GLOBALS["mensagem"];
    echo $mensagem;
}

$mensagem = "Mensagem 1: ";
imprimir();

//Resultado: Mensagem 1: Oi