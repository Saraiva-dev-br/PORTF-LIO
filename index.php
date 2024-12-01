<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema</title>
    <style>
        /* Estilos Globais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }

        /* Contêiner de Login */
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        /* Grupo de Input */
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Botão */
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Link Esqueci a Senha */
        .forgot-password {
            display: block;
            margin-top: 10px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        /* Responsividade para dispositivos móveis */
        @media (max-width: 600px) {
            .login-container {
                padding: 20px;
            }

            h2 {
                font-size: 20px;
            }

            input[type="email"], input[type="password"], button {
                padding: 12px;
                font-size: 16px;
            }
        }

        /* Responsividade para telas muito pequenas */
        @media (max-width: 400px) {
            .login-container {
                padding: 15px;
            }

            h2 {
                font-size: 18px;
            }

            input[type="email"], input[type="password"], button {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <!-- Formulário de Login -->
        <form action="index.html" method="GET">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
            </div>
            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            <button type="submit">Entrar</button>
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </form>
    </div>
</body>
</html>
