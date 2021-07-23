<?php
/*Note que diferentemente de uma função com um retorno (que é mais comum),
geralmente funções que passam parâmetros por referência tem como objetivo
principal alterar os valores destas variáveis já dentro da própria função. Um
exemplo disso poderá ser visto em funções que realizam manipulação em arrays.  */
$nome = 'eduardo BONA';
function normalizar_nome(&$novo_nome){
    $novo_nome = ucwords(strtolower($novo_nome));
}
normalizar_nome($nome);
echo $nome;
//Resultado: Eduardo Bona