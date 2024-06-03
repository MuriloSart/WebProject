<?php
    session_start();
    include 'conexao.php';

    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        echo "Você precisa estar logado";
        print("<br><a href='index.php'>Menu</a>");
        print("<br><a href='login.php'>Login</a>");
        exit;
    }

    $id_cliente = $_SESSION['id'];

    // Buscar os dados do cliente
    $sql = "SELECT * FROM clientes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_cliente);
    $stmt->execute();
    $result = $stmt->get_result();
    $cliente = $result->fetch_assoc();

    if (!$cliente) {
        echo "Cliente não encontrado.";
        exit;
    }

    $stmt->close();
    $conn->close();
?>