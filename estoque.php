<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - E-commerce de Roupas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: red;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: black !important;
        }
        .container {
            margin-top: 20px;
        }
        .table th, .table td {
            text-align: center;
        }
        button {
            text-align: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo.png" height="100" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="adm.php">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produtos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="camisas.php">Camisas</a></li>
                            <li><a class="dropdown-item" href="blusas.php">Blusas</a></li>
                            <li><a class="dropdown-item" href="calcas.php">Calças</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-white" href="ad_prod.php">Adicionar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center">Gerenciamento de Estoque</h2>

        <div class="mb-4">
            <h4>Filtrar produtos</h4>
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="productId" class="form-label">ID do Produto</label>
                            <input type="text" class="form-control" id="productId" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="productName" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="productCategory" class="form-label">Categoria</label>
                            <select class="form-select" id="productCategory" required>
                                <option value="">Selecione...</option>
                                <option value="camisas">Camisas</option>
                                <option value="blusas">Blusas</option>
                                <option value="calcas">Calças</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: red; color: white;">Filtrar</button>
            </form>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-2">
            <h4>Lista de Produtos em Estoque</h4>
            <a href="ad_prod.php" class="btn btn-primary" style="background-color: red; color: white;">
                <i class="fas fa-plus"></i> Adicionar Produto
            </a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Produto</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="Amor.php">TL$ Amor</a></td>
                    <td>Camisas</td>
                    <td>100</td>
                    <td>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Editar</button>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Remover</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="Lucky.php">TL$ Lucky</a></td>
                    <td>Camisas</td>
                    <td>100</td>
                    <td>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Editar</button>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Remover</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="camisa1.php">TL$ Lust</a></td>
                    <td>Camisas</td>
                    <td>100</td>
                    <td>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Editar</button>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Remover</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="tiger.php">TL$ Tiger</a></td>
                    <td>Blusas</td>
                    <td>20</td>
                    <td>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Editar</button>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Remover</button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><a href="beatle.php">TL$ Beatle</a></td>
                    <td>Blusas</td>
                    <td>20</td>
                    <td>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Editar</button>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Remover</button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><a href="skull.php">TL$ Skull</a></td>
                    <td>Camisas</td>
                    <td>20</td>
                    <td>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Editar</button>
                        <button class="btn btn-sm" style="background-color: red; color: white;">Remover</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
