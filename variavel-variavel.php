<?php
/*
Por fim, uma variável variável é um recurso muito incomum em projetos, mas que
é bom que você saiba que ele existe, pois um dia quem sabe poderá precisar dele.

Este recurso é, geralmente, utilizado quando se faz necessário possuir nome de variáveis dinâmicas, ou seja, eu poder acessar o valor de uma variável através de um valor variável. Parece bem complicado, não é? Acredito que com um exemplo fique mais fácil.

Em projetos mais avançados, o uso de valores variáveis na composição do nome de uma variável não é tão comum, é mais comum ver chamada de funções ou métodos (quando orientado a objetos o projeto), por
meio de um valor de variável. Quando chegarmos em funções, lembre-se
deste recurso.
*/
$nome = "Eduardo";
$sobrenome = "Bona";
$variavel = "nome";
echo $$variavel;