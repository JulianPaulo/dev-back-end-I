<?php
function imprimir_mensagem($mensagem, $saudacao = 'Bom dia')
{
    $texto = $saudacao . '. ';
    $texto .= $mensagem; //Texto recebe ele mesmo mais mensagem
    return $texto;
}

echo imprimir_mensagem('Seja Bem Vindo. ');
// retorno: Bom dia. Seja Bem vindo.

echo imprimir_mensagem('Opa!', 'Boa noite');
// retorno: Boa noite. Opa!

echo imprimir_mensagem();
// erro: pois o primeiro parâmetro é obrigatório