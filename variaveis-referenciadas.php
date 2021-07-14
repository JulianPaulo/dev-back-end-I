<?php
/*
No PHP, quando fazemos uma instrução do
tipo "$a = $b;" estamos atribuindo o valor da variável $b para a variável $a, mas no desenrolar do
código cada uma passa a ter seu ciclo de vida de
forma diferente. Contudo, existe uma forma de
proporcionar a uma variável não só receber o
valor de uma variável, mas sim receber a própria
variável passando a ser ela.
Variáveis referenciadas, ao invés de receber o valor como se fosse uma cópia,
recebem a localização da variável presente em memória e, em seguida, passa a
responder também por ela
 */
$valor1 = 10;
$valor2 = 20;
$valor1 += 10;
$valor3 = &$valor1;
$valor3 += 50;
var_dump($valor1);
var_dump($valor2);
var_dump($valor3);

/*
Resultado:
 (int) 70 
 (int) 20 
 (int) 70
*/