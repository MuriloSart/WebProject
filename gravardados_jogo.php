<?php
    session_start();
    include 'conexao.php';
    $titulo = $_POST['txtTitulo'];
    $sinopse=$_POST['txtSinopse'];
    $genero=$_POST['txtGenero'];
    $publico_alvo=$_POST['txtPublico'];
    $data= date("Y-m-d");
    
 
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) 
    {
        header("Location: login.php");
        exit;
    }

    $id_cliente = $_SESSION['id_cliente'];
    $sql="INSERT INTO jogos ( foreign_key, titulo, sinopse, data_registro, genero, publico_alvo) values ('$id_cliente', '$sinopse','$data', '$genero', '$publico_alvo')";

    if ($conn->query($sql) == TRUE && $_SESSION['login'] == "true") 
        echo "Cliente gravado com sucesso";
    else 
        echo "Erro: " . $sql . "<br>" . $conn->error;
    $conn->close();
    
    print("<br><a href=index.php>Menu</a>");
?>