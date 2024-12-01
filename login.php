<?php
session_start();

// Verifica se os campos de usuário e senha foram enviados
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header("Location: index.php");
    exit;
}

// Inclui a configuração do banco de dados
include("config.php");

// Captura os dados enviados pelo formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

try {
    // Prepara a consulta SQL para evitar SQL Injection
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifica a senha
        if (password_verify($senha, $row['senha'])) {
            // Armazena os dados na sessão
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['tipo'] = $row['tipo'];

            // Redireciona para o dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            // Senha incorreta
            echo "<script>alert('Senha incorreta!');location.href='index.php';</script>";
        }
    } else {
        // Usuário não encontrado
        echo "<script>alert('Usuário não encontrado!');location.href='index.php';</script>";
    }
} catch (Exception $e) {
    // Trata erros inesperados
    error_log($e->getMessage());
    echo "<script>alert('Erro ao processar a solicitação. Tente novamente mais tarde.');location.href='index.php';</script>";
}
?>
