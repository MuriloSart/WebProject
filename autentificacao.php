<?php
    session_start();
    require 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') 
    {
        $email = $_POST['txtEmail'] ?? null;
        $cpf_cnpj = $_POST['txtCPF'] ?? null;

        $sql = "SELECT * FROM clientes WHERE email = '$email' AND cpf_cnpj = '$cpf_cnpj'";
        $result = $conn->query($sql);

        if ($email && $cpf_cnpj)
        {
            if ($result->num_rows > 0) 
            {
                $user = $result->fetch_assoc();
    
                if($user['inativo'] == 0)
                {
                    $_SESSION['login'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['cpf_cnpj'] = $cpf_cnpj;
                    $_SESSION['nome'] = $user['nome'];
                    $_SESSION['id'] = $user['id'];
                    header("Location: index.php");
                }
                else 
                {
                    echo "Usuario desativado";
                }
            } 
            else 
            {
                echo "Email ou CPF/CNPJ inválido(s).";
                header("Location: login.php");
            }
        }
        else 
        {
            echo "Por favor, preencha todos os campos.";
            header("Location: login.php");
        }
    }

    $conn->close();
?>
