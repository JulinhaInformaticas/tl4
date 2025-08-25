<?php
include('conexao.php'); // já define $pdo (objeto PDO)

// Pegando dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['password'];

// Criptografando a senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Usando Prepared Statement com PDO para evitar SQL Injection
try {
    $stmt = $pdo->prepare("INSERT INTO cliente (nome, sobrenome, telefone, email, senha)
                           VALUES (:nome, :sobrenome, :telefone, :email, :senha)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
        // Redireciona, se quiser:
        // header("Location: login.php"); 
        // exit;
    } else {
        echo "Erro ao cadastrar.";
    }
} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
}
?>
