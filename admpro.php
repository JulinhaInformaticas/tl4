<?php
session_start();

if (!isset($_SESSION['cliente_id'])) {
    header("Location: login.php");
    exit;
}

echo "Olá, " . $_SESSION['cliente_nome'] . "! Bem-vindo ao painel.";
?>
