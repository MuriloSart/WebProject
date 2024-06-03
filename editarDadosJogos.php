<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id =  $_POST['id'];
        $titulo = $_POST['txtTitulo'];
        $sinopse = $_POST['txtSinopse'];
        $genero = $_POST['txtGenero'];
        $publico_alvo = $_POST['txtPublico'];

        $stmt = $conn->prepare("UPDATE jogos SET titulo = ?, sinopse = ?, genero = ?, publico_alvo = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $titulo, $sinopse, $genero, $publico_alvo, $id);

        try 
        {
            if ($stmt->execute()) 
            {
                echo "Alterações salvas";
            }
        } 
        catch (mysqli_sql_exception $e) 
        {
            echo "Erro: " . $e->getMessage();
        }
    
        $stmt->close();
    }
    
    $conn->close();

    print("<br><a href=index.php>Menu</a>");
?>