<?php
//A função sprintf ao invés de realizar diretamente a impressão como um comando echo/printf apenas retorna o valor e assim uma variável pode receber o retorno e posteriormente ser utilizada em outro lugar
$nome = "Eduardo Bona";
$idade = 31;
$mensagem = sprintf("O nome do usuário é %s e a idade %s", $nome, $idade);
?>
<p><?=$mensagem?></p>