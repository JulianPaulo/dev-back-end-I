<?php
$dados = array(
    "9.0 Sobre o PHP", "10.0 Conclusão", "8.0 Sobre o HTML", "1.0 Introdução"
);
sort($dados,SORT_NUMERIC);
var_dump($dados);
/*
Como por padrão o PHP realiza SORT_REGULAR ele acaba entendendo que 1.0 e
10.0 por começarem com o número 1, são menores que os demais itens que começam com 8 e 9, ou seja, ele realiza, por padrão uma ordenação caracter a caracter.
Quando alteramos o comportamento padrão para NATURAL ou NUMERIC ele
passa a exercer outro tipo de ordenação. No caso da atividade, por se tratar
de números, recomendaria SORT_NUMERIC mas funcionaria também com
SORT_NATURAL.

*/