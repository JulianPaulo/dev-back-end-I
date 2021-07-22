
<?php
/*
É importante que você configure seu ambiente de desenvolvimento para sempre mostrar erros e faça o processo inverso no servidor de produção não exibindo
nenhum erro ao usuário final, pois mostrar erros em ambiente de produção é
considerado falha grave de segurança. Para isso, existem duas configurações no
PHP como display_errors que podem estar ligadas ou desligadas com valores on
ou off e error_reporting com o valor E_ALL para sempre reportar qualquer erro.
Estas alterações podem ser realizadas a nível de ambiente dentro do arquivo
de configuração do PHP ou por meio de uma função no código. O arquivo de
configuração se chama php.ini e a depender do servidor instalado ele pode ser
localizado em pastas como bin, etc ou conf. No caso do código, é mais simples,
basta inserir a seguinte linha de código em seu script que os erros deixarão de
serem exibidos na tela.
*/
ini_set('display_errors', 0);
echo "Olá Mundo!";

/*Vou causar um erro em breve... */
echo <br />;
echo "Misturando HTML e PHP";

?>