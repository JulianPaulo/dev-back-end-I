<?php
//Muitos desenvolvedores optam por um código onde o mesmo arquivo (script) que possui o formulário seja o que recebe também.
$nome = $_POST["nome"];
$email = $_POST["email"];

echo "Recebendo dados com nome: $nome e email: $email";