<?php

// verifica se a posta chamada testes existe
// se não existir ele vai criar a pasta testes
$pasta = 'testes';
if (file_exists($pasta)){
    echo "Pasta testes existe <br />";
} else {
    echo "Pasta testes não existe <br />";
    $retorno = mkdir('testes', 0777, false);
    if (!$retorno) {
        echo "Erro ao criar pasta testes <br/>";    
    }
}

$arquivo_texto = fopen($pasta . "/meu_texto1.txt","w+");

if(file_exists($arquivo_texto)){
    echo "Arquivo criado com sucesso";
}else{
    echo "Erro ao criar arquivo";
}


//verifica se o arquivo meu_texto1.txt existe na pasta
// se existir ele vai copiar para meu_texto2.txt
$arquivo1 = $pasta . '/meu_texto1.txt';
$arquivo1_copia = $pasta . '/meu_texto2.txt';

if (file_exists($arquivo1)){
    $retorno = copy($arquivo1, $arquivo1_copia);
    var_dump(pathinfo($arquivo1_copia));
    if (!$retorno){
        echo "<br /> Erro ao copiar arquivo $arquivo1_copia";
    }
}

//se existir o arquivo meu_texto3.txt ele vai excluir
$arquivo3 = $pasta . '/meu_texto3.txt';
if (file_exists($arquivo3)){
    if (unlink($arquivo3)){
        echo "Arquivo excluído";
    }else {
        echo "Erro ao excluir arquivo";
    }
}
