<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product-info {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }
        .address-option, .payment-option {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
        }
        .address-option.selected, .payment-option.selected {
            border-color: #b90404;
            background-color: #f9f9f9;
        }
        .btn {
            background-color: #bd0c0c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn-secondary {
            background-color: #f04e4e;
        }
        .summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .hidden {
            display: none;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .row {
            display: flex;
            gap: 15px;
        }
        .row .form-group {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Finalizar Compra</h1>
        
        <!-- Informações do Produto -->
        <div class="product-info">
            <img src="imagens/ilv.jpg" alt="Produto" class="product-image">
            <div>
                <h3>TL$ Pump</h3>
                <p>Jaqueta bomber pump, peça exclusiva da TL4</p>
                <p>Quantidade: 1</p>
                <p>Preço: R$ 360,00</p>
            </div>
        </div>
        
        <!-- Seleção de Endereço -->
        <h2>Endereço de Entrega</h2>
        <div class="address-option selected">
            <h3>Endereço Principal</h3>
            <p>Rua Exemplo, 123</p>
            <p>Bairro, Cidade - SP</p>
            <p>CEP: 01234-567</p>
        </div>
        
        <div class="address-option" id="new-address-btn">
            <h3>Adicionar Novo Endereço</h3>
            <p>Clique para cadastrar um novo endereço</p>
        </div>
        
        <!-- Métodos de Pagamento -->
        <h2>Método de Pagamento</h2>
        <div class="payment-option selected">
            <input type="radio" name="payment" checked> Cartão de Crédito
        </div>
        <div class="payment-option">
            <input type="radio" name="payment"> Boleto Bancário
        </div>
        <div class="payment-option">
            <input type="radio" name="payment"> PIX
        </div>
        
        <!-- Detalhes do Pagamento -->
        <div id="payment-details" class="form-section">
            <!-- Cartão de Crédito -->
            <div id="card-details" class="hidden">
                <h3>Dados do Cartão</h3>
                <div class="form-group">
                    <label>Número do Cartão</label>
                    <input type="text" placeholder="0000 0000 0000 0000">
                </div>
                <div class="form-group">
                    <label>Nome no Cartão</label>
                    <input type="text" placeholder="Nome impresso no cartão">
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Validade</label>
                        <input type="text" placeholder="MM/AA">
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="text" placeholder="123">
                    </div>
                </div>
            </div>

            <!-- PIX -->
            <div id="pix-details" class="hidden">
                <h3>Pagamento via PIX</h3>
                <p>Chave PIX: <strong>pix@lojaexemplo.com</strong></p>
                <p>Após finalizar, você receberá um QR Code para pagamento.</p>
            </div>

            <!-- Boleto -->
            <div id="boleto-details" class="hidden">
                <h3>Gerar Boleto Bancário</h3>
                <div class="form-group">
                    <label>CPF ou CNPJ</label>
                    <input type="text" placeholder="Digite seu CPF ou CNPJ">
                </div>
                <p>O boleto será gerado e enviado ao seu e-mail após a finalização da compra.</p>
            </div>
        </div>

        <!-- Resumo da Compra -->
        <div class="summary">
            <h2>Resumo da Compra</h2>
            <p>Subtotal: R$ 360,00</p>
            <p>Frete: R$ 15,00</p>
            <p><strong>Total: R$ 375,00</strong></p>
            <button class="btn">Finalizar Compra</button>
        </div>
    </div>

    <script>
        // Redirecionar para tela de novo endereço
        document.getElementById('new-address-btn').addEventListener('click', function() {
            window.location.href = 'endereço.php';
        });

        // Selecionar endereço ou pagamento
        document.querySelectorAll('.address-option, .payment-option').forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options in the same group
                const group = this.classList.contains('address-option') ? 
                    document.querySelectorAll('.address-option') : 
                    document.querySelectorAll('.payment-option');
                
                group.forEach(opt => opt.classList.remove('selected'));
                
                // Add selected class to clicked option
                this.classList.add('selected');
                
                // For payment options, also check the radio button
                if (this.classList.contains('payment-option')) {
                    this.querySelector('input').checked = true;
                    // Mostrar detalhes de pagamento
                    const selectedText = this.textContent.trim();
                    document.getElementById('card-details').classList.add('hidden');
                    document.getElementById('pix-details').classList.add('hidden');
                    document.getElementById('boleto-details').classList.add('hidden');

                    if (selectedText.includes("Cartão")) {
                        document.getElementById('card-details').classList.remove('hidden');
                    } else if (selectedText.includes("PIX")) {
                        document.getElementById('pix-details').classList.remove('hidden');
                    } else if (selectedText.includes("Boleto")) {
                        document.getElementById('boleto-details').classList.remove('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>
