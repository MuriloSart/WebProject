<?php 
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id_cliente = $_SESSION['id'];
        $inatividade = ($_SESSION['inativo'] == 1) ? "0" : "1";

        $sql = "UPDATE clientes SET inativo = ?  WHERE id = ? ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $inatividade, $id_cliente);
        $stmt->execute();

        if ($stmt->execute()) 
        {
            header("Location: editarCliente.php");
            exit;
        } 
        else 
        {
            echo "Erro ao atualizar o cliente: " . $stmt->error;
        }

        $stmt->close();
    }
    $conn->close();
?>