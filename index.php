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
            if ($_SESSION['login']) 
                echo "Você está logado.";
            else 
                echo "Você não está logado.";
        ?>
    </header>

    <nav>
        <div>
            <a href=" login.php">Logar</a>
        </div>

        <div>
            <a href=" cadastroCliente.php">Cadastrar-se como Cliente</a>
        </div>

        <div>
            <a href=" cadastroJogo.php">Cadastrar seu Jogo</a>
        </div>

        <div>
            <a href=" listaGeral.php">Lista de Usuários</a>
        </div>

    </nav>

    <footer>
        <p>Desenvolvido por @Murilo Sartori e @Gustavo Ferrari</p>
    </footer>

</body>
</html>