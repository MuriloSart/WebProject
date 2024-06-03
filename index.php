<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Site de Jogos</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <nav>
        
        
        <?php
        if (!isset($_SESSION['login']) || !$_SESSION['login']) {
            ?>
            <br>
            <div>
                <a href="login.php">Logar</a>
            </div>
            
        <br>

        <div>
            <a href=" cadastroCliente.php">Cadastrar-se como Cliente</a>
        </div>

        <?php
        }
        ?>

        <?php
            if (isset($_SESSION['login']) && $_SESSION['login']) {
        ?>
        <br>
        <div>
            <a href=" cadastroJogo.php">Cadastrar seu Jogo</a>
        </div>

        <br>
        
        <div>
            <a href=" editarCliente.php">Configurações</a>
        </div>

        <br>

        <div>
            <a href=" editarJogos.php">Jogos Postados</a>
        </div>
        <?php
        }
        ?>
        <br>

        <div>
            <a href=" listaGeral.php">Lista de Usuários</a>
        </div>

        <br>

        <div>
            <a href=" listaJogos.php">Lista de Jogos</a>
        </div>

        <br>

        <form method="post" action="logout.php">
            <button type="submit" name="logout" value="executar">Logout</button>
        </form>

    </nav>

    <footer>
        <p>Desenvolvido por @Murilo Sartori e @Gustavo Ferrari</p>
    </footer>

</body>
</html>