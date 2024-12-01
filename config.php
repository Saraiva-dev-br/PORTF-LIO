<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'sislogin');

// Conexão com o banco de dados
$conn = new mysqli(HOST, USER, PASS, BASE);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Define o charset para evitar problemas de codificação
$conn->set_charset("utf8");

?>
