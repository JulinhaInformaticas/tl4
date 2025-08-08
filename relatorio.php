<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório Financeiro Completo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .report-container {
      max-width: 1200px;
      margin: auto;
      background: white;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      margin-top: 20px;
      margin-bottom: 40px;
    }

    h1, h2, h3, h4 {
      color: #8B0000;
      font-weight: 600;
    }

    .section-title {
      border-bottom: 2px solid #8B0000;
      padding-bottom: 8px;
      margin-bottom: 20px;
    }

    .footer {
      background-color: rgb(129, 3, 3);
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .footer a {
      color: #fff;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .info-card {
      border-radius: 10px;
      background-color: #f1f1f1;
      padding: 20px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      transition: transform 0.3s, box-shadow 0.3s;
      height: 100%;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .info-icon {
      height: 64px;
      width: 64px;
      border-radius: 50%;
      background-color: #dc3545;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      margin-right: 15px;
      flex-shrink: 0;
    }

    .info-text h6 {
      margin: 0;
      font-weight: bold;
      color: #dc3545;
    }

    .info-text p {
      margin: 0;
      font-size: 1.2rem;
      color: #212529;
    }

    .navbar {
      background-color: #8B0000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand, .navbar-nav .nav-link {
      color: white !important;
    }

    .navbar-brand img {
      height: 60px;
    }

    .chart-container {
      position: relative;
      margin: auto;
      height: 400px;
      margin-bottom: 40px;
    }

    .data-table {
      width: 100%;
      margin-bottom: 30px;
      border-collapse: collapse;
    }

    .data-table th, .data-table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .data-table th {
      background-color: #8B0000;
      color: white;
      font-weight: 500;
    }

    .data-table tr:hover {
      background-color: #f5f5f5;
    }

    .badge {
      font-size: 0.85em;
      padding: 5px 10px;
      border-radius: 20px;
    }

    .badge-success {
      background-color: #28a745;
    }

    .badge-warning {
      background-color: #ffc107;
      color: #212529;
    }

    .badge-danger {
      background-color: #dc3545;
    }

    .tooltip-inner {
      max-width: 350px;
      padding: 15px;
      text-align: left;
    }

    .tab-content {
      padding: 20px 0;
    }

    .nav-tabs .nav-link {
      color: #495057;
      font-weight: 500;
    }

    .nav-tabs .nav-link.active {
      color: #8B0000;
      font-weight: 600;
    }

    .progress {
      height: 25px;
      margin-bottom: 15px;
      border-radius: 4px;
    }

    .progress-bar {
      font-weight: 500;
    }

    .expense-category {
      margin-bottom: 15px;
    }

    .expense-category h5 {
      margin-bottom: 10px;
      font-size: 1.1rem;
    }

    .customer-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      transition: all 0.3s;
    }

    .customer-card:hover {
      border-color: #8B0000;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .customer-name {
      font-weight: 600;
      color: #8B0000;
      margin-bottom: 5px;
    }

    .customer-detail {
      font-size: 0.9rem;
      margin-bottom: 3px;
    }

    .date-range-selector {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .download-btn {
      background-color: #8B0000;
      color: white;
      border: none;
      padding: 8px 20px;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s;
    }

    .download-btn:hover {
      background-color: #6d0000;
      color: white;
      transform: translateY(-2px);
    }

    .summary-card {
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      border-left: 4px solid #8B0000;
    }

    .trend-indicator {
      display: inline-flex;
      align-items: center;
      margin-left: 10px;
    }

    .trend-up {
      color: #28a745;
    }

    .trend-down {
      color: #dc3545;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="imagens/logo.png" alt="Logo" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="adm.php"><i class="fas fa-home"></i> Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fas fa-boxes"></i> Produtos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="camisas.php">Camisas</a></li>
            <li><a class="dropdown-item" href="blusas.php">Blusas</a></li>
            <li><a class="dropdown-item" href="calcas.php">Calças</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="relatorio.php"><i class="fas fa-chart-line"></i> Relatórios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php"><i class="fas fa-envelope"></i> Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Conteúdo -->
<div class="report-container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1><i class="fas fa-file-invoice-dollar"></i> Relatório Financeiro Completo</h1>
    <button class="download-btn">
      <i class="fas fa-download"></i> Exportar PDF
    </button>
  </div>

  <!-- Filtro de Período -->
  <div class="date-range-selector mb-5">
    <div class="row">
      <div class="col-md-3">
        <label for="periodoSelect" class="form-label">Período:</label>
        <select id="periodoSelect" class="form-select">
          <option value="diario">Diário</option>
          <option value="semanal">Semanal</option>
          <option value="mensal" selected>Mensal</option>
          <option value="trimestral">Trimestral</option>
          <option value="anual">Anual</option>
          <option value="personalizado">Personalizado</option>
        </select>
      </div>
      <div class="col-md-4" id="customRange" style="display: none;">
        <label class="form-label">Intervalo Personalizado:</label>
        <div class="input-group">
          <input type="date" class="form-control" id="startDate">
          <span class="input-group-text">até</span>
          <input type="date" class="form-control" id="endDate">
        </div>
      </div>
      <div class="col-md-3">
        <label for="categoriaSelect" class="form-label">Categoria:</label>
        <select id="categoriaSelect" class="form-select">
          <option value="todos" selected>Todas Categorias</option>
          <option value="camisas">Camisas</option>
          <option value="blusas">Blusas</option>
          <option value="calcas">Calças</option>
        </select>
      </div>
      <div class="col-md-2 d-flex align-items-end">
        <button class="btn btn-dark w-100" id="applyFilter">
          <i class="fas fa-filter"></i> Aplicar
        </button>
      </div>
    </div>
  </div>

  <!-- Resumo Financeiro -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-chart-pie"></i> Resumo Financeiro</h3>
    <div class="row">
      <div class="col-md-3">
        <div class="info-card" data-bs-toggle="tooltip" data-bs-placement="top" 
             title="Lucro líquido após todas as despesas">
          <div class="info-icon">
            <i class="fas fa-chart-line fa-2x"></i>
          </div>
          <div class="info-text">
            <h6>Lucro Líquido</h6>
            <p>R$ 76.267,95 <span class="trend-indicator trend-up"><i class="fas fa-arrow-up"></i> 5.2%</span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-card" data-bs-toggle="tooltip" data-bs-placement="top" 
             title="Total de vendas antes de descontos">
          <div class="info-icon bg-success">
            <i class="fas fa-hand-holding-usd fa-2x"></i>
          </div>
          <div class="info-text">
            <h6>Receita Bruta</h6>
            <p>R$ 104.500,00 <span class="trend-indicator trend-up"><i class="fas fa-arrow-up"></i> 7.8%</span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-card" data-bs-toggle="tooltip" data-bs-placement="top" 
             title="Custos operacionais e de produção">
          <div class="info-icon bg-warning">
            <i class="fas fa-wallet fa-2x"></i>
          </div>
          <div class="info-text">
            <h6>Despesas Totais</h6>
            <p>R$ 28.232,05 <span class="trend-indicator trend-down"><i class="fas fa-arrow-down"></i> 2.1%</span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-card" data-bs-toggle="tooltip" data-bs-placement="top" 
             title="Porcentagem do lucro em relação à receita">
          <div class="info-icon bg-info">
            <i class="fas fa-percent fa-2x"></i>
          </div>
          <div class="info-text">
            <h6>Margem de Lucro</h6>
            <p>72.98% <span class="trend-indicator trend-up"><i class="fas fa-arrow-up"></i> 1.3%</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6">
        <div class="summary-card">
          <h5><i class="fas fa-info-circle"></i> Resumo do Período</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><strong>Período:</strong> 01/05/2025 - 31/05/2025</li>
            <li class="mb-2"><strong>Total de Vendas:</strong> 565 unidades</li>
            <li class="mb-2"><strong>Ticket Médio:</strong> R$ 184,96</li>
            <li class="mb-2"><strong>Crescimento:</strong> <span class="text-success">+22%</span> em relação ao mês anterior</li>
            <li class="mb-2"><strong>Devoluções:</strong> 12 (2.1% do total)</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="summary-card">
          <h5><i class="fas fa-bullseye"></i> Metas</h5>
          <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
              <span>Meta de Vendas</span>
              <span>85%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
              <span>Meta de Receita</span>
              <span>92%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div>
            <div class="d-flex justify-content-between mb-1">
              <span>Controle de Despesas</span>
              <span>78%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Gráficos e Análises -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-chart-bar"></i> Análise de Vendas</h3>
    
    <ul class="nav nav-tabs" id="salesTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="true">Por Produto</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab" aria-controls="categories" aria-selected="false">Por Categoria</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="trends-tab" data-bs-toggle="tab" data-bs-target="#trends" type="button" role="tab" aria-controls="trends" aria-selected="false">Tendências</button>
      </li>
    </ul>
    
    <div class="tab-content" id="salesTabsContent">
      <div class="tab-pane fade show active" id="products" role="tabpanel" aria-labelledby="products-tab">
        <div class="row">
          <div class="col-md-8">
            <div class="chart-container">
              <canvas id="vendasChart"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <h5><i class="fas fa-trophy"></i> Top Produtos</h5>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Produto</th>
                    <th>Vendas</th>
                    <th>Receita</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-bs-toggle="tooltip" title="Responsável por 35.4% da receita total">
                    <td>TL$ Lucky</td>
                    <td>200</td>
                    <td>R$ 36.900,00</td>
                  </tr>
                  <tr data-bs-toggle="tooltip" title="Responsável por 26.5% da receita total">
                    <td>TL$ Amor</td>
                    <td>150</td>
                    <td>R$ 27.675,00</td>
                  </tr>
                  <tr data-bs-toggle="tooltip" title="Responsável por 21.2% da receita total">
                    <td>TL$ Lust</td>
                    <td>120</td>
                    <td>R$ 22.140,00</td>
                  </tr>
                  <tr data-bs-toggle="tooltip" title="Responsável por 17.0% da receita total">
                    <td>TL$ Pump</td>
                    <td>95</td>
                    <td>R$ 17.785,00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
        <div class="row">
          <div class="col-md-8">
            <div class="chart-container">
              <canvas id="categoriesChart"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <h5><i class="fas fa-list"></i> Por Categoria</h5>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Categoria</th>
                    <th>Vendas</th>
                    <th>% Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Camisas</td>
                    <td>320</td>
                    <td>56.6%</td>
                  </tr>
                  <tr>
                    <td>Blusas</td>
                    <td>145</td>
                    <td>25.7%</td>
                  </tr>
                  <tr>
                    <td>Calças</td>
                    <td>100</td>
                    <td>17.7%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <div class="tab-pane fade" id="trends" role="tabpanel" aria-labelledby="trends-tab">
        <div class="row">
          <div class="col-md-8">
            <div class="chart-container">
              <canvas id="trendsChart"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <h5><i class="fas fa-chart-line"></i> Tendências</h5>
            <div class="customer-card">
              <div class="customer-name">Dia com Maior Venda</div>
              <div class="customer-detail"><strong>Data:</strong> 15/05/2025</div>
              <div class="customer-detail"><strong>Total:</strong> R$ 5.820,00</div>
              <div class="customer-detail"><strong>Itens:</strong> 32 unidades</div>
              <div class="customer-detail"><strong>Produto mais vendido:</strong> TL$ Lucky (12 unidades)</div>
            </div>
            <div class="customer-card">
              <div class="customer-name">Melhor Semana</div>
              <div class="customer-detail"><strong>Semana 3:</strong> 13/05 - 19/05</div>
              <div class="customer-detail"><strong>Total:</strong> R$ 28.450,00</div>
              <div class="customer-detail"><strong>Crescimento:</strong> +18% em relação à semana anterior</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Margem de Lucro -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-percentage"></i> Margem de Lucro</h3>
    <div class="row">
      <div class="col-md-8">
        <div class="chart-container">
          <canvas id="margemLucroChart"></canvas>
        </div>
      </div>
      <div class="col-md-4">
        <h5><i class="fas fa-info-circle"></i> Análise de Rentabilidade</h5>
        <div class="mb-4">
          <h6>Margem por Categoria</h6>
          <div class="mb-2">
            <span>Camisas</span>
            <span class="float-end">78.5%</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 78.5%" aria-valuenow="78.5" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-2">
            <span>Blusas</span>
            <span class="float-end">65.2%</span>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 65.2%" aria-valuenow="65.2" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div>
            <span>Calças</span>
            <span class="float-end">71.8%</span>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 71.8%" aria-valuenow="71.8" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div>
          <h6>Fatores que Impactam a Margem</h6>
          <ul>
            <li>Custos de matéria-prima: <strong>R$ 12.450,00</strong></li>
            <li>Frete e logística: <strong>R$ 3.780,00</strong></li>
            <li>Descontos concedidos: <strong>R$ 2.150,00</strong></li>
            <li>Devoluções: <strong>R$ 1.850,00</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Despesas Detalhadas -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-receipt"></i> Despesas Detalhadas</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="chart-container">
          <canvas id="despesasChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <h5><i class="fas fa-list-ol"></i> Detalhamento das Despesas</h5>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Categoria</th>
                <th>Valor</th>
                <th>% Total</th>
                <th>Variação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Matéria-prima</td>
                <td>R$ 12.450,00</td>
                <td>44.1%</td>
                <td><span class="badge bg-warning">+3.2%</span></td>
              </tr>
              <tr>
                <td>Pessoal</td>
                <td>R$ 8.200,00</td>
                <td>29.0%</td>
                <td><span class="badge bg-success">-1.5%</span></td>
              </tr>
              <tr>
                <td>Logística</td>
                <td>R$ 3.780,00</td>
                <td>13.4%</td>
                <td><span class="badge bg-danger">+8.7%</span></td>
              </tr>
              <tr>
                <td>Marketing</td>
                <td>R$ 2.150,00</td>
                <td>7.6%</td>
                <td><span class="badge bg-success">-2.3%</span></td>
              </tr>
              <tr>
                <td>Outros</td>
                <td>R$ 1.652,05</td>
                <td>5.9%</td>
                <td><span class="badge bg-warning">+0.8%</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <div class="mt-4">
      <h5><i class="fas fa-lightbulb"></i> Oportunidades de Redução</h5>
      <div class="row">
        <div class="col-md-4">
          <div class="expense-category">
            <h5>Logística <span class="badge bg-danger">Alta</span></h5>
            <p>Aumento de 8.7% nos custos com frete. Avaliar novos fornecedores ou renegociar contratos.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="expense-category">
            <h5>Matéria-prima <span class="badge bg-warning">Média</span></h5>
            <p>Aumento de 3.2% nos custos. Considerar compra em maior volume para desconto.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="expense-category">
            <h5>Energia <span class="badge bg-success">Baixa</span></h5>
            <p>Redução de 1.2% no consumo. Manter medidas de eficiência energética.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Clientes que Mais Compraram -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-users"></i> Clientes que Mais Compraram</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="chart-container">
          <canvas id="clientesChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <h5><i class="fas fa-crown"></i> Top Clientes</h5>
        <div class="customer-card">
          <div class="customer-name">Maria Silva</div>
          <div class="customer-detail"><strong>Total Gasto:</strong> R$ 12.500,00</div>
          <div class="customer-detail"><strong>Compras:</strong> 8</div>
          <div class="customer-detail"><strong>Ticket Médio:</strong> R$ 1.562,50</div>
          <div class="customer-detail"><strong>Última Compra:</strong> 28/05/2025</div>
          <div class="customer-detail"><strong>Produto Preferido:</strong> TL$ Lucky (5 unidades)</div>
        </div>
        <div class="customer-card">
          <div class="customer-name">João Oliveira</div>
          <div class="customer-detail"><strong>Total Gasto:</strong> R$ 9.800,00</div>
          <div class="customer-detail"><strong>Compras:</strong> 6</div>
          <div class="customer-detail"><strong>Ticket Médio:</strong> R$ 1.633,33</div>
          <div class="customer-detail"><strong>Última Compra:</strong> 22/05/2025</div>
          <div class="customer-detail"><strong>Produto Preferido:</strong> TL$ Amor (4 unidades)</div>
        </div>
      </div>
    </div>
    
    <div class="mt-4">
      <h5><i class="fas fa-chart-pie"></i> Análise de Clientes</h5>
      <div class="row">
        <div class="col-md-4">
          <div class="info-card">
            <div class="info-icon bg-primary">
              <i class="fas fa-user-plus fa-2x"></i>
            </div>
            <div class="info-text">
              <h6>Novos Clientes</h6>
              <p>48</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-card">
            <div class="info-icon bg-success">
              <i class="fas fa-redo fa-2x"></i>
            </div>
            <div class="info-text">
              <h6>Clientes Recorrentes</h6>
              <p>32</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info-card">
            <div class="info-icon bg-warning">
              <i class="fas fa-user-clock fa-2x"></i>
            </div>
            <div class="info-text">
              <h6>Clientes Inativos</h6>
              <p>15</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fluxo de Caixa -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-money-bill-wave"></i> Fluxo de Caixa</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="chart-container">
          <canvas id="fluxoCaixaChart"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <h5><i class="fas fa-balance-scale"></i> Saldo e Projeções</h5>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Período</th>
                <th>Entradas</th>
                <th>Saídas</th>
                <th>Saldo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mês Anterior</td>
                <td>R$ 85.200,00</td>
                <td>R$ 24.800,00</td>
                <td>R$ 60.400,00</td>
              </tr>
              <tr class="table-primary">
                <td><strong>Mês Atual</strong></td>
                <td><strong>R$ 104.500,00</strong></td>
                <td><strong>R$ 28.232,05</strong></td>
                <td><strong>R$ 76.267,95</strong></td>
              </tr>
              <tr>
                <td>Próximo Mês (proj.)</td>
                <td>R$ 112.000,00</td>
                <td>R$ 30.500,00</td>
                <td>R$ 81.500,00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="alert alert-info mt-3">
          <i class="fas fa-info-circle"></i> <strong>Projeção:</strong> Considerando crescimento de 7% nas vendas e aumento de 8% nas despesas com logística.
        </div>
      </div>
    </div>
  </div>
  <!-- Conclusão e Recomendações -->
  <div class="mb-5">
    <h3 class="section-title"><i class="fas fa-clipboard-check"></i> Conclusão e Recomendações</h3>
    
    <div class="row">
      <div class="col-md-6">
        <div class="summary-card">
          <h5><i class="fas fa-check-circle text-success"></i> Pontos Positivos</h5>
          <ul>
            <li class="mb-2">Crescimento de <strong>22%</strong> nas vendas em relação ao mês anterior</li>
            <li class="mb-2">Margem de lucro aumentou <strong>1.3%</strong>, atingindo 72.98%</li>
            <li class="mb-2">Redução de <strong>1.5%</strong> nos custos com pessoal</li>
            <li class="mb-2">Aumento de <strong>32%</strong> na base de clientes recorrentes</li>
            <li class="mb-2">Ticket médio mantido em <strong>R$ 184,96</strong>, acima da média do setor</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="summary-card">
          <h5><i class="fas fa-exclamation-triangle text-warning"></i> Áreas de Atenção</h5>
          <ul>
            <li class="mb-2">Aumento de <strong>8.7%</strong> nos custos com logística</li>
            <li class="mb-2">Taxa de devoluções em <strong>2.1%</strong> (meta é abaixo de 1.5%)</li>
            <li class="mb-2">15 clientes inativos no período</li>
            <li class="mb-2">Custos com matéria-prima aumentaram <strong>3.2%</strong></li>
            <li class="mb-2">Meta de vendas atingiu apenas <strong>85%</strong> do esperado</li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="mt-4">
      <h5><i class="fas fa-lightbulb"></i> Recomendações Estratégicas</h5>
      <div class="row">
        <div class="col-md-4">
          <div class="expense-category">
            <h5><i class="fas fa-truck text-danger"></i> Logística</h5>
            <ul>
              <li>Renegociar contratos com transportadoras</li>
              <li>Avaliar modalidades de frete mais econômicas</li>
              <li>Implementar sistema de roteirização inteligente</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="expense-category">
            <h5><i class="fas fa-boxes text-warning"></i> Estoque</h5>
            <ul>
              <li>Otimizar níveis de estoque para reduzir custos</li>
              <li>Implementar sistema de previsão de demanda</li>
              <li>Negociar prazos mais longos com fornecedores</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="expense-category">
            <h5><i class="fas fa-user-tag text-success"></i> Clientes</h5>
            <ul>
              <li>Criar programa de fidelidade</li>
              <li>Oferecer promoções para clientes inativos</li>
              <li>Melhorar pós-venda para reduzir devoluções</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Assinatura e Informações Adicionais -->
  <div class="mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-file-signature"></i> Assinatura</h5>
            <p class="card-text">Este relatório foi gerado automaticamente pelo sistema em <strong>01/06/2025 às 14:30</strong></p>
            <div class="signature-area mt-4 p-3 border rounded text-center">
              <p class="mb-1">___________________________________</p>
              <p class="text-muted">Responsável Financeiro</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><i class="fas fa-question-circle"></i> Ajuda</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fas fa-phone-alt"></i> Suporte: (11) 1234-5678
              </li>
              <li class="list-group-item">
                <i class="fas fa-envelope"></i> Email: financeiro@empresa.com
              </li>
              <li class="list-group-item">
                <i class="fas fa-clock"></i> Horário: Seg-Sex, 9h-18h
              </li>
              <li class="list-group-item">
                <i class="fas fa-file-pdf"></i> <a href="#">Manual do Relatório Financeiro</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Sobre Nós</h5>
        <p>Empresa especializada em moda autoral desde 2010, com foco em qualidade e design inovador.</p>
      </div>
      <div class="col-md-4">
        <h5>Links Úteis</h5>
        <ul class="list-unstyled">
          <li><a href="#">Política de Privacidade</a></li>
          <li><a href="#">Termos de Serviço</a></li>
          <li><a href="#">Trabalhe Conosco</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Redes Sociais</h5>
        <div class="social-links">
          <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <hr class="bg-light">
    <div class="text-center">
      <p class="mb-0">© 2025 TL$ Store. Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Ativar tooltips
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Mostrar/ocultar intervalo personalizado
  document.getElementById('periodoSelect').addEventListener('change', function() {
    const customRange = document.getElementById('customRange');
    if (this.value === 'personalizado') {
      customRange.style.display = 'block';
    } else {
      customRange.style.display = 'none';
    }
  });

  // Gráfico de Vendas por Produto
  const vendasCtx = document.getElementById('vendasChart').getContext('2d');
  const vendasChart = new Chart(vendasCtx, {
    type: 'bar',
    data: {
      labels: ['TL$ Lucky', 'TL$ Amor', 'TL$ Lust', 'TL$ Pump'],
      datasets: [{
        label: 'Quantidade Vendida',
        data: [200, 150, 120, 95],
        backgroundColor: 'rgba(139, 0, 0, 0.7)',
        borderColor: 'rgba(139, 0, 0, 1)',
        borderWidth: 1
      }, {
        label: 'Receita (R$)',
        data: [36900, 27675, 22140, 17785],
        backgroundColor: 'rgba(220, 53, 69, 0.7)',
        borderColor: 'rgba(220, 53, 69, 1)',
        borderWidth: 1,
        type: 'line',
        yAxisID: 'y1'
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Vendas por Produto - Maio 2025'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              let label = context.dataset.label || '';
              if (label) {
                label += ': ';
              }
              if (context.datasetIndex === 0) {
                label += context.raw + ' unidades';
              } else {
                label += 'R$ ' + context.raw.toLocaleString('pt-BR');
              }
              return label;
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Quantidade'
          }
        },
        y1: {
          position: 'right',
          beginAtZero: true,
          title: {
            display: true,
            text: 'Receita (R$)'
          },
          grid: {
            drawOnChartArea: false
          }
        }
      }
    }
  });

  // Gráfico de Vendas por Categoria
  const categoriesCtx = document.getElementById('categoriesChart').getContext('2d');
  const categoriesChart = new Chart(categoriesCtx, {
    type: 'doughnut',
    data: {
      labels: ['Camisas', 'Blusas', 'Calças'],
      datasets: [{
        data: [320, 145, 100],
        backgroundColor: [
          'rgba(139, 0, 0, 0.7)',
          'rgba(220, 53, 69, 0.7)',
          'rgba(255, 193, 7, 0.7)'
        ],
        borderColor: [
          'rgba(139, 0, 0, 1)',
          'rgba(220, 53, 69, 1)',
          'rgba(255, 193, 7, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Distribuição de Vendas por Categoria'
        },
        legend: {
          position: 'right',
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              const label = context.label || '';
              const value = context.raw;
              const total = context.dataset.data.reduce((a, b) => a + b, 0);
              const percentage = Math.round((value / total) * 100);
              return `${label}: ${value} unidades (${percentage}%)`;
            }
          }
        }
      }
    }
  });

  // Gráfico de Tendências
  const trendsCtx = document.getElementById('trendsChart').getContext('2d');
  const trendsChart = new Chart(trendsCtx, {
    type: 'line',
    data: {
      labels: ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4'],
      datasets: [{
        label: 'Vendas Semanais (R$)',
        data: [24500, 26800, 28450, 24750],
        backgroundColor: 'rgba(139, 0, 0, 0.2)',
        borderColor: 'rgba(139, 0, 0, 1)',
        borderWidth: 2,
        tension: 0.3,
        fill: true
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Tendência de Vendas Semanais - Maio 2025'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return 'Receita: R$ ' + context.raw.toLocaleString('pt-BR');
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: false,
          title: {
            display: true,
            text: 'Receita (R$)'
          }
        }
      }
    }
  });

  // Gráfico de Margem de Lucro
  const margemLucroCtx = document.getElementById('margemLucroChart').getContext('2d');
  const margemLucroChart = new Chart(margemLucroCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai'],
      datasets: [{
        label: 'Margem de Lucro (%)',
        data: [68.5, 69.2, 70.8, 71.7, 72.9],
        backgroundColor: 'rgba(40, 167, 69, 0.7)',
        borderColor: 'rgba(40, 167, 69, 1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Evolução da Margem de Lucro - 2025'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.dataset.label + ': ' + context.raw + '%';
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: false,
          min: 65,
          max: 75,
          title: {
            display: true,
            text: 'Margem (%)'
          }
        }
      }
    }
  });

  // Gráfico de Despesas
  const despesasCtx = document.getElementById('despesasChart').getContext('2d');
  const despesasChart = new Chart(despesasCtx, {
    type: 'pie',
    data: {
      labels: ['Matéria-prima', 'Pessoal', 'Logística', 'Marketing', 'Outros'],
      datasets: [{
        data: [12450, 8200, 3780, 2150, 1652.05],
        backgroundColor: [
          'rgba(139, 0, 0, 0.7)',
          'rgba(220, 53, 69, 0.7)',
          'rgba(255, 193, 7, 0.7)',
          'rgba(23, 162, 184, 0.7)',
          'rgba(108, 117, 125, 0.7)'
        ],
        borderColor: [
          'rgba(139, 0, 0, 1)',
          'rgba(220, 53, 69, 1)',
          'rgba(255, 193, 7, 1)',
          'rgba(23, 162, 184, 1)',
          'rgba(108, 117, 125, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Distribuição das Despesas - Maio 2025'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              const label = context.label || '';
              const value = context.raw;
              const total = context.dataset.data.reduce((a, b) => a + b, 0);
              const percentage = Math.round((value / total) * 100);
              return `${label}: R$ ${value.toLocaleString('pt-BR')} (${percentage}%)`;
            }
          }
        }
      }
    }
  });

  // Gráfico de Clientes
  const clientesCtx = document.getElementById('clientesChart').getContext('2d');
  const clientesChart = new Chart(clientesCtx, {
    type: 'radar',
    data: {
      labels: ['Frequência', 'Valor Gasto', 'Recência', 'Prod. Preferidos', 'Ticket Médio'],
      datasets: [{
        label: 'Maria Silva',
        data: [8, 10, 5, 9, 8],
        backgroundColor: 'rgba(139, 0, 0, 0.2)',
        borderColor: 'rgba(139, 0, 0, 1)',
        borderWidth: 2
      }, {
        label: 'João Oliveira',
        data: [6, 8, 8, 7, 9],
        backgroundColor: 'rgba(220, 53, 69, 0.2)',
        borderColor: 'rgba(220, 53, 69, 1)',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Perfil dos Melhores Clientes'
        },
        scales: {
          r: {
            angleLines: {
              display: true
            },
            suggestedMin: 0,
            suggestedMax: 10
          }
        }
      }
    }
  });

  // Gráfico de Fluxo de Caixa
  const fluxoCaixaCtx = document.getElementById('fluxoCaixaChart').getContext('2d');
  const fluxoCaixaChart = new Chart(fluxoCaixaCtx, {
    type: 'line',
    data: {
      labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
      datasets: [{
        label: 'Entradas',
        data: [75200, 78400, 81200, 85200, 104500, 112000],
        backgroundColor: 'rgba(40, 167, 69, 0.2)',
        borderColor: 'rgba(40, 167, 69, 1)',
        borderWidth: 2,
        tension: 0.3
      }, {
        label: 'Saídas',
        data: [22400, 23500, 24800, 24800, 28232, 30500],
        backgroundColor: 'rgba(220, 53, 69, 0.2)',
        borderColor: 'rgba(220, 53, 69, 1)',
        borderWidth: 2,
        tension: 0.3
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        title: {
          display: true,
          text: 'Fluxo de Caixa - 2025 (R$)'
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return context.dataset.label + ': R$ ' + context.raw.toLocaleString('pt-BR');
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: false,
          title: {
            display: true,
            text: 'Valor (R$)'
          }
        }
      }
    }
  });
</script>
</body>
</html>