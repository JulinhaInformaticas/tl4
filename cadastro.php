<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            background-color: red;
            color: white;
        }

        .btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Cadastro</h2>

    <!-- Formulário envia os dados para processa_cadastro.php -->
    <form action="processo_cadastro.php" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" required>
        </div>
        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input class="form-control" type="text" name="sobrenome" id="sobrenome" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input class="form-control" type="tel" name="telefone" id="telefone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input class="form-control" type="password" name="password" id="password" required>
        </div>
        <div class="d-grid">
            <button class="btn" type="submit">Cadastrar</button>
        </div>
    </form>
</div>
</body>
</html>
