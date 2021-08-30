<?php
require_once('Aluno.php');

$aluno = new Aluno(1234, "Jose Fernandes");

/*
fizemos um if ternário para cada nota com uma impressão, ou
seja, se a condição for satisfeita, imprime a primeira mensagem, caso contrário, imprime a segunda. A condição de if vem do retorno da chamada da função $aluno->setNotas(6.5)). Se a nota do aluno for incluída, teremos o retorno 1 caso contrário, teremos o retorno 0. Essa chamada se repete por mais três vezes. 
*/
echo ($aluno->setNotas(6.5)) ? "</br>Nota incluída com sucesso" : "</br>Erro ao incluir Nota";
echo ($aluno->setNotas(5.5)) ? "</br>Nota incluída com sucesso" : "</br>Erro ao incluir Nota";
echo ($aluno->setNotas(6.5)) ? "<br>Nota incluída
com sucesso": "<br>Erro ao Incluir Nota";
echo ($aluno->setNotas(5.5)) ? "<br>Nota incluída
com sucesso": "<br>Erro ao Incluir Nota";

//Imprime nome do aluno
echo "<div><br>Notas do aluno";
echo "<br>Nome: " . $aluno->nome;

//Imprime notas do aluno
$aluno->obterNotas();
//Imprime média do aluno
echo "<br>Média: " . $aluno->obterMedia();
echo "</div>";

/*
Resultado:
Nota incluída com sucesso
Nota incluída com sucesso
Nota incluída com sucesso
Nota incluída com sucesso

Notas do aluno
Nome: Jose Fernandes
Nota [1] = 6.5
Nota [2] = 5.5
Nota [3] = 6.5
Nota [4] = 5.5
Média: 6

*/