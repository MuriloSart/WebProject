
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
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['nome'] = $user['nome'];
                    $_SESSION['cpf_cnpj'] = $cpf_cnpj;
                    $_SESSION['email'] = $email;
                    $_SESSION['telefone'] = $user['telefone'];
                    if($_SESSION['nome'] == "murilosarz")
                        $_SESSION['admin'] = true;
                    else
                        $_SESSION['admin'] = false;
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
                print("<br><a href=login.php>Logar</a>");
            }
        }
        else 
        {
            echo "Por favor, preencha todos os campos.";
            print("<br><a href=login.php>Logar</a>");
        }
    }

    $conn->close();
?>
