<?php
 function validarUsuario($usuario, $senha){
   $user = addslashes(strtolower(strip_tags($usuario)));
   $tamanhoUser = strlen($user);
 
   $pass = strip_tags($senha);
   $tamanhoPass = strlen($pass);
 
   if (($tamanhoUser >= 8) && ($tamanhoPass >= 9)){
     return 1;
   }else{
     return 0;
   }
 }
echo validarUsuario("Rafaelfl<br>orindo", "123456789");

//retorna 1
?>
