<?php
session_start();

// Limpa todas as variáveis de sessão
$_SESSION = array();

// Se desejar destruir a sessão completamente
session_destroy();

// Redireciona para a página inicial
header("Location: index.php");
exit;
?>
