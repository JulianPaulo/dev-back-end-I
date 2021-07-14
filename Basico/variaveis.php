<?php
$valor1= 10;
$valor2 = 20;
$valor1 += 10;
$valor3 = $valor1;
$valor3 += 50;
var_dump($valor1);
var_dump($valor2);
var_dump($valor3);

/*
Resultado:
(int) 20
(int) 20
(int) 70
*/