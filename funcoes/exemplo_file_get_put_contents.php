<?php
$arquivo = 'texto.txt';

if(file_exists($arquivo)){
    echo "Arquivo Original = " . file_get_contents($arquivo);

    echo "<br />Adicionando conteúdo dentro do arquivo";
    $dados = "a disciplina de Programação Back End I";
    if(file_put_contents($arquivo, $dados, FILE_APPEND)){
        echo "Arquivo Modificado = " . file_get_contents($arquivo);
    }else{
        echo "Erro ao editar o arquivo";
    }
}

/*
Resultado: (obtido na primeira execução pressupondo que o arquivo texto.txt tivesse somente o texto "abc" dentro dele).

Arquivo Original = abc
a disciplina de Programação Back End I
*/