<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = $_SESSION['id'];
        $nome = $_POST['txtNome'];
        $cpf_cnpj = $_POST['txtCPF'];
        $email = $_POST['txtEmail'];
        $telefone = $_POST['txtTel'];

        $stmt = $conn->prepare("UPDATE clientes SET nome = ?, cpf_cnpj = ?, email = ?, telefone = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $nome, $cpf_cnpj, $email, $telefone, $id);
        
        try 
        {
            if ($stmt->execute()) 
            {
                echo "Novo registro criado com sucesso";
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