<?php
    session_start();
    include 'conexao.php';
    $titulo = $_POST['txtTitulo'];
    $sinopse = $_POST['txtSinopse'];
    $genero = $_POST['txtGenero'];
    $publico_alvo = $_POST['txtPublico'];
    $data = date("Y-m-d");

    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        echo "Você precisa estar Logado";
        print("<br><a href=index.php>Menu</a>");
        print("<br><a href=login.php>Login</a>");
        exit;
    }

    $id_cliente = $_SESSION['id'];
    $sql = "INSERT INTO jogos (foreign_key, titulo, sinopse, data_registro, genero, publico_alvo) VALUES ('$id_cliente', '$titulo', '$sinopse', '$data', '$genero', '$publico_alvo')";

    if ($conn->query($sql) === TRUE && $_SESSION['login'] == "true") {
        echo "Cliente gravado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    print("<br><a href=index.php>Menu</a>");
?>
