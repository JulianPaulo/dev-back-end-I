<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];
$media = 6;


if(($nota1+$nota2+$nota3+$nota4)/4 >= $media) echo "Aprovado!";
else echo "Reprovado!";
