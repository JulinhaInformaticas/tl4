<?php
session_start();
include('conexao.php');

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

try {
    $stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :usuario OR nome = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($cliente && isset($cliente['senha']) && password_verify($senha, $cliente['senha'])) {
            $_SESSION['cliente_id'] = $cliente['id'];
            $_SESSION['cliente_nome'] = $cliente['nome'];
            header("Location: adm.php");
            exit;
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
}
?>
