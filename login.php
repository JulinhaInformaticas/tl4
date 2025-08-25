<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
            padding: 20px 30px 30px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 320px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff0000;
        }
        .login-container input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #ff0000;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .login-container button:hover {
            background-color: #cc0000;
        }
        .register-option {
            text-align: center;
            margin-top: 15px;
        }
        .register-option a {
            color: #ff0000;
            text-decoration: none;
            font-weight: bold;
        }
        .register-option a:hover {
            text-decoration: underline;
        }
        .error-message {
            background-color: #ffdddd;
            border-left: 6px solid #ff0000;
            margin-bottom: 15px;
            padding: 10px;
            color: #a70000;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>Login</h1>

    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<div class="error-message">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
        unset($_SESSION['error_message']);
    }
    ?>

    <form action="processo_login.php" method="POST" autocomplete="off">
        <input type="text" name="usuario" placeholder="Usuário (email ou nome)" required autofocus />
        <input type="password" name="senha" placeholder="Senha" required />
        <button type="submit">Entrar</button>
    </form>

    <div class="register-option">
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
    </div>
</div>
</body>
</html>
