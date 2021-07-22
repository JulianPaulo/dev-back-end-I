<?php
// o seguinte aparenta imprimir 'true'
echo (true?'true':false?'t':'f');

// conteudo, a saída acima é 't'
// isto por causa da expressão ternário se avaliada da esquerda pra direita

// o seguinte é a versão mais óbvia do mesmo código acima
echo ((true ? 'true' : 'false') ? 't' : 'f');

// aqui, você pode ver que a primeira expressão é avaliada para 'true', que
// por sua vez avalia para (bool)true, assim retornando a parte true da
// segunda expressão ternária.
?>