<?php
//A utilização do método GET está muito presente na navegação entre páginas através de links (urls) e seus parâmetros e apesar de possível é pouco frequente em formulários que se aproveitam muito do método POST. Isso se dá porque o método GET trafega no que conhecemos como QUERY STRING (consulta em texto) no endereço do navegador.
$categoria = $_GET["id"];
switch ($categoria) {
    case 'tv':
        echo "Destaques: LG, TLC, Philco";
        break;
    case 'fogao':
        echo "Destaques: Arno, Dako";
        break;
    case 'chuveiro':
        echo "Destaques: Lorenzetti, Bella Ducha";
        break;
    default:
        echo "Categoria não encontrada";
        break;
}
