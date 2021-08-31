<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

Class Pessoa3{
    public function idade(){
        $somaIdades = 0;
        for($j = 0; $j < 50; $j=$j+2){
            $somaIdades = $j*2;
        }
        return $somaIdades;
    }
}

$foo = new Pessoa3();
$funcname = "idade";
echo $foo->$funcname();

/*
Resultado:
96
*/
?>