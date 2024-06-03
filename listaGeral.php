<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <!-- dados do banco -->
    <?php
        include_once("conexao.php");
        $sql="SELECT * FROM clientes";
?>
</head>
<header>
<?php include('../WebProject/header.php'); ?>
</header>
<body>

    <nav>
        <div>
            <a href="index.php">Menu</a>
        </div>
        
    </nav>

    <section>
        <h1>Lista Geral de Clientes</h1>
        <table>
            <tr>
                <td>Nome</td>
                <td>CPF/CNPJ</td>
                <td>Email</td>
                <td>Telefone</td>
            </tr>
            <!-- exibir os dados da tabela do banco de dados-->
            <?php 
            $rs=$conn->query($sql);
            while($linha=$rs->fetch_assoc())
            {
            ?>
           <tr>
               <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["cpf_cnpj"]; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td><?php echo $linha["telefone"]; ?></td>
            </tr>
            <?php } ?>

    </table>           

    <h1>Lista Geral de Jogos</h1>
        <table>
            <tr>
                <td>Titulo</td>
                <td>Sinopse</td>
                <td>Data</td>
                <td>Gênero</td>
                <td>Público Alvo</td>
            </tr>
            <!-- exibir os dados da tabela do banco de dados-->
            <?php 
            $rs=$conn->query($sql);
            while($linha=$rs->fetch_assoc())
            {
            ?>
           <tr>
               <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["cpf_cnpj"]; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td><?php echo $linha["telefone"]; ?></td>
            </tr>
            <?php } ?>

    </table>           
    </section>
</body>
    <footer>
        <p>Desenvolvido por @Murilo Sartori e @Gustavo Ferrari</p>
    </footer>
</html>