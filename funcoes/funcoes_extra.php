<?php

// FUNÇÃO EXPLODE -> Divide uma string em strings
$content = file_get_contents("exemplo1.txt");
$slice = explode(" ",$content);
foreach($slice as $slices){
    echo $slices . "<br/>";
}

$dir = "testes";

// FUNÇÃO OPENDIR -> Abre um manipulador de diretório
//Abre um diretório conhecido, e faz a leitura de seu conteúdo
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) != false){
            echo "filename: $file : filetype: " . filetype($dir . $file) . "<br/>";
        }
        closedir($dh);
    }
}

/*
O exemplo acima irá imprimir algo similar á: 
filename: . : filetype: dir
filename: .. : filetype: dir
filename: apache : filetype: dir
filename: cgi : filetype: dir
filename: cli : filetype: dir
*/

// FUNÇÃO READDIR -> lê os campos no manipulador do diretório
//Listando todos os arquivos de um diretório
echo "<br/>";
if($handle = opendir('testes')){
    echo "Manipulador de diretórios: $handle<br/>";
    echo "Arquivos:<br/>";
}
/* Esta é a forma correta de varrer o diretório */
while (false !== ($file = readdir($handle))){
    echo "$file<br/>";
}

/* Esta é a forma INCORRETA de varrer o diretório */
while ($file = readdir($handle)){
    echo "$file<br/>";
}
closedir($handle);
/*
RESULTADO:

Manipulador de diretórios: Resource id #5
Arquivos:
meu_texto1.txt
..
.
*/

//Listar todos os arquivos no diretório atual e retirar . e ..
if ($handle = opendir('.')){
    while(false !== ($file = readdir($handle))){
        if ($file != "." && $file != ".."){
            echo "$file<br/>";
        }
    }
    closedir($handle);
}
/*
RESULTADO:
funcao_2.php
array_ordenacao.php
funcao_3.php
funcoes_extra.php
array_validacao.php
funcoes_01.php
exemplo1.txt
funcoes_filesystem.php
exemplo_file_get_put_contents.php
funcao_escopo.php
funcao_4-referencia.php
testes
array_keys.php
funcoes_filesystem2.php
array_manipulacao.php
*/

//FUNÇÃO CLOSEDIR -> Fecha o manipulador do diretório
echo "<br/>";
$dir = "testes";
// Abri um diretório conhecido, le o diretório inserindo variáveis e então fecha
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        $directory = readdir($dh);
        closedir($dh);
    }
    echo $directory;
    //Exibe meu_texto1.txt
}