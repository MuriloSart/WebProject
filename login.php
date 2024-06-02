<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <nav>
        <div>
            <a href="index.php">Home</a>
        </div>
    </nav>
    <section id="main">
        <div id="title">
            <h1>Login</h1>
        </div>
        <div id="campos">
            <form method="GET" action="autentificacao.php">
                <table style="border:'0';">
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="txtEmail" required></td>
                    </tr>

                    <tr>
                        <td>CPF/CNPJ</td>
                        <td><input type="text" name="txtCPF" placeholder="xxxxxxxxx-xx" required></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Login"></td>
                        <td><input type="reset" value="Limpar"></td>
                    </tr>

                </table>
            </form>
        </div>
    </section>

    <footer>
        <p>Desenvolvido por @Murilo Sartori e @Gustavo Ferrari</p>
    </footer>

</body>
</html>