<?php
    include 'buscaDeDados.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulário de Cliente</title>
</head>
<body>
    <h2>Formulário de Cliente</h2>
    <form method="POST" action="editarDadosCliente.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="txtNome" value="<?php echo isset($cliente['nome']) ? htmlspecialchars($cliente['nome']) : ''; ?>"><br><br>

        <label for="cpf_cnpj">CPF/CNPJ:</label>
        <input type="text" id="cpf_cnpj" name="txtCPF" value="<?php echo isset($cliente['cpf_cnpj']) ? htmlspecialchars($cliente['cpf_cnpj']) : ''; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="txtEmail" value="<?php echo isset($cliente['email']) ? htmlspecialchars($cliente['email']) : ''; ?>"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="txtTel" value="<?php echo isset($cliente['telefone']) ? htmlspecialchars($cliente['telefone']) : ''; ?>"><br><br>

        <input type="submit" value="Atualizar">
    </form>

    <form method="post" action="deixarInativo.php">
            <br>

            <?php if(isset($_SESSION['inativo']))
            {  ?>

                <label for="nome">Inatividade:</label><br>
                <input type="submit" name=" " value="
                <?php   if ($_SESSION['inativo']) 
                            echo "Ativar Conta.";
                        else
                            echo "Desativar Conta."; ?>">
            <?php 
            } ?>
    </form>
</body>
</html>
