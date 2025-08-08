<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 95%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: #CC0000;
        }
        .register-option {
            text-align: center;
            margin-top: 15px;
        }
        .register-option a {
            color: #FF0000;
            text-decoration: none;
        }
        .register-option a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form onsubmit="return verificarLogin(event)">
            <input type="text" id="usuario" placeholder="Usuário" required>
            <input type="password" id="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <div class="register-option">
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
        </div>
    </div>

    <script>
        function verificarLogin(event) {
            event.preventDefault();

            const usuario = document.getElementById("usuario").value;
            const senha = document.getElementById("senha").value;

            if (usuario === "admin" && senha === "admin") {
                alert("Login bem-sucedido. Redirecionando...");
                window.location.href = "adm.php"; // Altere para a página desejada
            } else {
                alert("Usuário ou senha incorretos.");
            }

            return false;
        }
    </script>
</body>
</html>
