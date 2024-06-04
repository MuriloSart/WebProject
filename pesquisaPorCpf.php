<?php
    session_start();
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $cpf = $_POST['txtCPF'];

        $stmt = $conn->prepare("SELECT * FROM clientes WHERE cpf_cnpj = ?");
        $stmt->bind_param("s", $cpf);

        try 
        {
            if ($stmt->execute()) 
            {
                $result = $stmt->get_result();
                $cliente = $result->fetch_assoc();
                $_SESSION['pesquisa'] = $cliente['cpf_cnpj'];
                header("Location: listaGeral.php");
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