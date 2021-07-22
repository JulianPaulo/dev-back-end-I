<?php

/*
Como uma constante possui um escopo global durante o tempo de execução de um script e não pode ser alterada, geralmente utilizamos ela para armazenar alguns dados como dados de acesso ao banco de dados (servidor, usuário e senha) ou outros valores próprios da aplicação. Quem define o uso é o desenvolvedor, mas as constantes são muito comuns.

Constantes têm sua declaração e forma de acesso bem diferentes de uma variável. A declaração é feita por meio de uma função e seu acesso feito diretamente pelo nome da constante no código. Lembre-se que a convenção é de que uma constante sempre possui letras maiúsculas e de que uma constante é sensível a alteração de maiúsculas e minúsculas.
 */
define("VERSAO_APLICACAO", "1.10");
define("MOSTRAR_ERROS", "1");

echo VERSAO_APLICACAO;
echo "<br /> ";
echo MOSTRAR_ERROS;

/*
Resultado:
1.10

*/
