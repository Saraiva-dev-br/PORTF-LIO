<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQ0wlK7Y2S0EqtCjqC6b04kjpSTeRRSKm1Mr9KokC3qFw51ERfKnLg8xD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema X</a>
            <?php
                echo "Olá, " . $_SESSION["nome"];
                echo " <a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
    </nav>

    <!-- Conteúdo do dashboard pode ser adicionado aqui -->

</body>
</html>
