<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabeçalho Responsivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar {
            background-color: red;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: black !important;
        }
        .navbar-brand img {
            height:100px ; /* Ajuste o tamanho da imagem conforme necessário */
        }
          /* Cards de produtos melhorados (mantendo cores originais) */
        .products-section {
            padding: 50px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-weight: 700;
            color: rgb(129, 3, 3);
        }
        
        .product-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            height: 100%;
            background-color: #fff;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .product-img {
            height: 300px;
            object-fit: cover;
        }
        
        .product-body {
            padding: 20px;
            position: relative;
        }
        
        .product-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: #000;
        }
        
        .product-price {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: red;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo.png" height="7px" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pagina1.php">Início</a>
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
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrinho.php"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light text-black" href="estoque.php">Estoque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light text-black ms-2" href="relatorio.php">Relatório</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light text-black ms-2" href="status.php">Processos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light text-black ms-2" href="funcionarios.php">Equipe</a>
                    </li>
                </ul>
                
    </nav>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" style="width: 80%; max-width: 800px; margin: 0 auto;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="camisas.php"><img src="imagens/iniv.jpg" class="d-block mx-auto" style="width: 100%; height: auto;" alt="blusa1"></a>
        </div>
        <div class="carousel-item">
            <a href="skull.php"><img src="imagens/jaja.jpg" class="d-block mx-auto" style="width: 100%; height: auto;" alt="blusa2"></a>
        </div>
        <div class="carousel-item">
            <a href="beatle.php"><img src="imagens/kkl.jpg" class="d-block mx-auto" style="width: 100%; height: auto;" alt="camisa1"></a>
        </div>
        <div class="carousel-item">
            <a href="tiger.php"><img src="imagens/tigkf.jpg" class="d-block mx-auto" style="width: 100%; height: auto;" alt="tg"></a>
        </div>
    </div>
</div>
   

   <!-- Seção de produtos -->
    <section class="products-section">
        <div class="container">
            <h2 class="section-title">DESTAQUES DA COLEÇÃO</h2>
            
            <div class="row">
                <!-- Produto 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='camisa1.php';">
                        <img src="imagens/sjs.jpg" class="card-img-top product-img" alt="TL$ Lust">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Lust</h5>
                            <p class="card-text">Camiseta premium em algodão penteado</p>
                            <span class="product-price">R$ 149,90</span>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='Amor.php';">
                        <img src="imagens/amor.jpg" class="card-img-top product-img" alt="TL$ Amor">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Amor</h5>
                            <p class="card-text">Camiseta premium de algodão</p>
                            <span class="product-price">R$ 130,00</span>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='Lucky.php';">
                        <img src="imagens/green.jpg" class="card-img-top product-img" alt="TL$ Lucky">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Lucky</h5>
                            <p class="card-text">Camiseta estilo retro de poliester</p>
                            <span class="product-price">R$ 249,90</span>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='pump.php';">
                        <img src="imagens/ilv.jpg" class="card-img-top product-img" alt="TL$ Pump">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Pump</h5>
                            <p class="card-text">Jaqueta bomber de couro estilizada</p>
                            <span class="product-price">R$ 360,00</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='yokai.php';">
                        <img src="imagens/yokai-Photoroom.png" class="card-img-top product-img" alt="TL$ Pump">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Yokai</h5>
                            <p class="card-text">Calça baggy estilizada oriental</p>
                            <span class="product-price">R$ 260,00</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='Dreams.php';">
                        <img src="imagens/japanrelease-Photoroom.png" class="card-img-top product-img" alt="TL$ Pump">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Dreams</h5>
                            <p class="card-text">Calça baggy estilizada oriental</p>
                            <span class="product-price">R$ 260,00</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='kabal.php';">
                        <img src="imagens/kanye_resized.png" class="card-img-top product-img" alt="TL$ Pump">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ Kabal</h5>
                            <p class="card-text">Calça moletom estilizada</p>
                            <span class="product-price">R$ 260,00</span>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6 col-lg-3">
                    <div class="card product-card" onclick="window.location.href='Uzi.php';">
                        <img src="imagens/Telisss.png" class="card-img-top product-img" alt="TL$ Pump">
                        <div class="card-body product-body">
                            <h5 class="card-title product-title">TL$ UZI</h5>
                            <p class="card-text">Calça moletom estilizada</p>
                            <span class="product-price">R$ 160,00</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>