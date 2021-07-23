<?php
/*
Como resultado é criado um arquivo chamado exemplo1.txt, escrito "primeiro exemplo". Se você repetir a ação, "primeiro exemplo" será escrito novamente no fim desse arquivo.

É importante notar que você tem diversas maneiras de abrir um arquivo, que são representadas por letras. No exemplo acima utilizamos o modo "a", veja abaixo a lista de todos os modos e suas descrições:

'r' - abre somente para leitura; coloca o ponteiro no começo do arquivo.

'r+' - abre para leitura e gravação; coloca o ponteiro no começo do arquivo.

'w' - abre somente para gravação; coloca o ponteiro no começo do arquivo e apaga o conteúdo que já foi escrito. Se o arquivo não existir, tenta criá-lo.

'w+' - abre para leitura e escrita; coloca o ponteiro no início do arquivo e apaga o conteúdo que já foi escrito. Se o arquivo não existir, tenta criá-lo.

'a' - abre o arquivo somente para escrita; coloca o ponteiro no fim do arquivo. Se o arquivo não existir, tenta criá-lo.

'a+' - abre o arquivo para leitura e gravação; coloca o ponteiro no fim do arquivo. Se o arquivo não existir, tenta criá-lo.

*/

//Abre ou cria o arquivo exemplo1.txt
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen("exemplo1.txt", "a+");

//Escreve "primeiro exemplo" no exemplo1.txt
$escreve = fwrite($fp, "primeiro-exemplo ");

// Fecha o arquivo
fclose($fp);
?>