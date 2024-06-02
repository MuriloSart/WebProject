<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Obter os dados do formulário
        $nome = $_POST['txtNome'];
        $cpf_cnpj = $_POST['txtCPF'];
        $email = $_POST['txtEmail'];
        $telefone = $_POST['txtTel'];
    
        // Preparar a consulta SQL
        $stmt = $conn->prepare("INSERT INTO clientes (nome, cpf_cnpj, email, telefone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $cpf_cnpj, $email, $telefone);
        
        //Registrando o ID do cliente

        try 
        {
            // Executar a consulta
            if ($stmt->execute()) 
            {
                echo "Novo registro criado com sucesso";
            }
        } 
        catch (mysqli_sql_exception $e) 
        {
            // Verificar se o erro é devido a um valor duplicado
            if ($conn->errno == 1062)
                echo "Erro: O valor CPF/CNPJ/Email já está registrados.";
            else 
                echo "Erro: " . $e->getMessage();
        }
    
        $stmt->close();
    }
    
    $conn->close();

    print("<br><a href=index.php>Menu</a>");
?>