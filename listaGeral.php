<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="./css/estilo.css">
    
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

        <form method="POST" action="pesquisaPorCpf.php">
            <tr>
                <td><h2>Pesquisa por CPF/CNPJ</h2></td>
                <td><input type="text" name="txtCPF" placeholder="xxxxxxxxx-xx" required></td>
                <input type="submit" value="Pesquisar">
            </tr>
        </form>
        <br>
        <br>
        <form class="form-pesquisa" method="post" action="resetarPesquisa.php">
            <button type="submit" name="resetarPesquisa" value="executar">Limpar Pesquisa</button>
        </form>

        <table>
            <tr>
                <td>Nome</td>
                <td>CPF/CNPJ</td>
                <td>Email</td>
                <td>Telefone</td>
            </tr>

            <?php 
            $rs=$conn->query($sql);
            while($linha=$rs->fetch_assoc())
            {
            ?>
           <tr>
                <?php if($linha['nome'] == "murilosarz") continue; 
                if(isset($_SESSION['pesquisa']) || $_SESSION['pesquisa'] != null)
                    if($linha['cpf_cnpj'] != $_SESSION['pesquisa']) continue ?>
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