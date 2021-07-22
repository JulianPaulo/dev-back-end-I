<?php
// Exemplo do operador Null Coalesce
$action = $_POST['action'] ?? 'default';

// O conteúdo acima é idêntico à essa declaração if/else
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

?>