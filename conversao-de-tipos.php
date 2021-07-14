<?php

/*possível utilizar o que chamamos de conversão de
tipos e, deste modo, forçar que o PHP ao término do processamento de uma informação force a tipagem de um tipo

Este recurso é muito utilizado para receber valores através da URL e garantir que mesmo
que um texto seja informado ainda assim com a conversão se tornará um inteiro.
*/

$situacao = 1;
var_dump($situacao);
$situacao = (bool) 1;
var_dump($situacao);

/*
Resultado:
int(1) 
bool(true)
*/