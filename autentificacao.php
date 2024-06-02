<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") 
    {
        $email = $_POST['txtEmail'];
        $cpf_cnpj = $_POST['txtCPF'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND cpf_cnpj = '$cpf_cnpj'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            $_SESSION['login'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['cpf_cnpj'] = $cpf_cnpj;
            header("Location: pagina_restrita.php");
        } 
        else 
        {
            echo "Email ou CPF/CNPJ inválido(s).";
        }
    }

    $conn->close();
?>