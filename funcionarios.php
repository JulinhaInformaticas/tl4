<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários - TL$4</title>
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
            height: 80px;
        }
        
        .footer {
            background-color: rgb(129, 3, 3);
            color: #fff;
            padding: 30px 0;
            text-align: center;
            font-size: 14px;
            width: 100%;
            position: relative;
            bottom: 0;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
        
        .page-title {
            color: #d10000;
            margin-bottom: 30px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        .section-title {
            color: #333;
            border-bottom: 2px solid #d10000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .employee-table th {
            background-color: #d10000;
            color: white;
        }

        .employee-table td {
            padding: 12px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo.png" height="80" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="adm.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-dark" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="page-title text-center">Nossa Equipe</h1>
        
        <div class="filter-section">
            <h2 class="section-title">Filtrar Funcionários</h2>
            <div class="row">
                <div class="col-md-4">
                    <label for="departmentFilter" class="form-label">Departamento</label>
                    <select class="form-select" id="departmentFilter">
                        <option value="all">Todos os Departamentos</option>
                        <option value="vendas">Vendas</option>
                        <option value="design">Design</option>
                        <option value="logistica">Logística</option>
                        <option value="marketing">Marketing</option>
                        <option value="rh">Recursos Humanos</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="positionFilter" class="form-label">Cargo</label>
                    <select class="form-select" id="positionFilter">
                        <option value="all">Todos os Cargos</option>
                        <option value="gerente">Gerente</option>
                        <option value="coordenador">Coordenador</option>
                        <option value="analista">Analista</option>
                        <option value="assistente">Assistente</option>
                        <option value="estagiario">Estagiário</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="searchEmployee" class="form-label">Buscar por Nome</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchEmployee" placeholder="Digite o nome">
                        <button class="btn btn-danger" type="button" id="searchButton">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="section-title">Funcionários</h2>
        <table class="table employee-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Departamento</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id="employeeTableBody">
                <!-- Exemplo de funcionário -->
                <tr data-department="vendas" data-position="gerente">
                    <td>Ana Carolina Silva</td>
                    <td>Vendas</td>
                    <td>Gerente</td>
                    <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#employeeModal" data-name="Ana Carolina Silva" data-salary="R$ 8.000" data-commission="R$ 2.000" data-bonus="R$ 1.000">Ver Dados Financeiros</button></td>
                </tr>
                <tr data-department="design" data-position="coordenador">
                    <td>Rafael Mendes</td>
                    <td>Design</td>
                    <td>Coordenador</td>
                    <td><button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#employeeModal" data-name="Rafael Mendes" data-salary="R$ 6.500" data-commission="R$ 1.500" data-bonus="R$ 800">Ver Dados Financeiros</button></td>
                </tr>
                <!-- Adicione outros funcionários conforme necessário -->
            </tbody>
        </table>

        <!-- Modal de Dados Financeiros -->
        <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="employeeModalLabel">Dados Financeiros</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nome:</strong> <span id="modalName"></span></p>
                        <p><strong>Salário:</strong> <span id="modalSalary"></span></p>
                        <p><strong>Comissão:</strong> <span id="modalCommission"></span></p>
                        <p><strong>Bônus:</strong> <span id="modalBonus"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        <p>&copy; 2025 TL$4. Todos os direitos reservados.</p>
        <p><a href="termos.php">Termos de Serviço</a> | <a href="privacidade.php">Política de Privacidade</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Função para preencher os dados do modal
        document.querySelectorAll('.btn-info').forEach(button => {
            button.addEventListener('click', function() {
                const name = this.getAttribute('data-name');
                const salary = this.getAttribute('data-salary');
                const commission = this.getAttribute('data-commission');
                const bonus = this.getAttribute('data-bonus');
                
                document.getElementById('modalName').textContent = name;
                document.getElementById('modalSalary').textContent = salary;
                document.getElementById('modalCommission').textContent = commission;
                document.getElementById('modalBonus').textContent = bonus;
            });
        });

        // Função para filtrar os funcionários
        function filterEmployees() {
            const departmentValue = document.getElementById('departmentFilter').value;
            const positionValue = document.getElementById('positionFilter').value;
            const searchValue = document.getElementById('searchEmployee').value.toLowerCase();
            
            const employees = document.querySelectorAll('#employeeTableBody tr');
            
            employees.forEach(employee => {
                const department = employee.getAttribute('data-department');
                const position = employee.getAttribute('data-position');
                const name = employee.querySelector('td').textContent.toLowerCase();
                
                const departmentMatch = departmentValue === 'all' || department === departmentValue;
                const positionMatch = positionValue === 'all' || position === positionValue;
                const searchMatch = name.includes(searchValue);
                
                if (departmentMatch && positionMatch && searchMatch) {
                    employee.style.display = 'table-row';
                } else {
                    employee.style.display = 'none';
                }
            });
        }

        // Adiciona eventos aos filtros
        document.getElementById('departmentFilter').addEventListener('change', filterEmployees);
        document.getElementById('positionFilter').addEventListener('change', filterEmployees);
        document.getElementById('searchEmployee').addEventListener('input', filterEmployees);
        document.getElementById('searchButton').addEventListener('click', filterEmployees);
    </script>
</body>
</html>
