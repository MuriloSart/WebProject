<?php
    include 'conexao.php';
    include 'config.php';
    $cpf = $_POST['txtCPF'];
    $nome=$_POST['txtNome'];
    $email=$_POST['txtEmail'];
    $tel=$_POST['txtTel'];
    
    //estrutura do SQL
    $sql="INSERT INTO clientes ( nome, cpf_cnpj, email, telefone) values ('$nome', '$cpf', '$email', '$tel')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente gravado com sucesso";
        $logado = true;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    
    print("<br><a href=index.php>Menu</a>");
?>