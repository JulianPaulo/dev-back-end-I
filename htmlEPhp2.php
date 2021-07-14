<?php
    echo "Olá mundo!";

    /*Vou causar um erro em breve... */
    echo <br />
    echo "Misturando HTML e PHP";

    /*
    No PHP, erros terão o tipo Notice, Warning, Parse Error e Fatal Error, geralmente. Destes, 
    
    o tipo de erro Notice indica uma inconsistência encontrada
contornada (ou ignorada sem erro) mais como um nível de aviso, pois o PHP
ainda vai tentar contornar. 

Erros do tipo Warning significam que o código executado não funcionou realmente e Parse Error já é um tipo de erro presente na
sintaxe do seu código e é o mais comum para quem está iniciando. 

Se Parse Error acontecer, é porque seu código precisa ser revisado pois
você esqueceu de alguma coisa e posso garantir que no começo será um ponto-vírgula, aspas ou o sinal de dólar ($) que declara as variáveis. Fatal Error é
o que de pior poderia ocorrer em um 
código PHP, pois geralmente está ligado
a algum erro de sintaxe e uma vez ocorrido o interpretador imediatamente
interrompe sua execução. */
    ?>