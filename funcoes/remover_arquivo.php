<?php
//Criando o arquivo
$arquivo = fopen("testes/meu_arquivo.txt", "a+");
fwrite($arquivo, "testando");
fclose($arquivo);

$arquivo2 = "testes/meu_arquivo.txt";
//Verifica se o arquivo existe
function remove_arquivo($arquivo2){
    if(file_exists($arquivo2)){
        unlink($arquivo2);
        return true;
    }else{
        echo "Não foi possível remover o arquivo, pois o arquivo não existe</br>";
        return false;
    }
}
//Removendo o arquivo
echo remove_arquivo($arquivo2);