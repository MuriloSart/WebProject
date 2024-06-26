<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nome = $_POST['txtNome'];
        $cpf_cnpj = $_POST['txtCPF'];
        $email = $_POST['txtEmail'];
        $telefone = $_POST['txtTel'];
        
        $stmt = $conn->prepare("INSERT INTO clientes (nome, cpf_cnpj, email, telefone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $cpf_cnpj, $email, $telefone);

        try 
        {
            if ($stmt->execute()) 
            {
                echo "Novo registro criado com sucesso";
            }
        } 
        catch (mysqli_sql_exception $e) 
        {
            if ($conn->errno == 1062)
                echo "Erro: O valor CPF/CNPJ ou Email já está registrado.";
            else 
                echo "Erro: " . $e->getMessage();
        }
    
        $stmt->close();
    }
    
    $conn->close();

    print("<br><a href=index.php>Menu</a>");
?>