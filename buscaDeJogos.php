<?php
    // Buscar os dados do cliente
    $sql1 = "SELECT * FROM jogos WHERE foreign_key = ?";
    $stmt = $conn->prepare($sql1);
    $stmt->bind_param("i", $id_cliente);
    $stmt->execute();
    $result1 = $stmt->get_result();
    $jogo = $result1->fetch_assoc();

    if (!$jogo)
    {
        echo "Jogos não encontrados.";
        exit;
    }

    $stmt->close();
    $conn->close();
?>