<?php
    session_start();
    include 'conexao.php';

    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) 
    {
        echo "Você precisa estar logado";
        print("<br><a href='index.php'>Menu</a>");
        print("<br><a href='login.php'>Login</a>");
        exit;
    }

    $id_cliente = $_SESSION['id'];

    $sql = "SELECT * FROM jogos WHERE foreign_key = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_cliente);
    $stmt->execute();
    $result = $stmt->get_result();
    $jogos = $result->fetch_all(MYSQLI_ASSOC);

    if (!$jogos)
    {
        echo "Jogos não encontrados.";
        print("<br><a href=index.php>Menu</a>");
        exit;
    }

    $stmt->close();
    $conn->close();
?>