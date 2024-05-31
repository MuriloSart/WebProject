<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Médico</title>
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
            <h1>Cadastro de Jogo</h1>
        </div>
        <div id="campos">
            <form method="post" action="gravardados.php">
                <table style="border:'0';">

                    <tr>
                        <td>Título</td>
                        <td><input type="text" name="txtTitulo" required></td>
                    </tr>

                    <tr>
                        <td>Sinopse</td>
                        <td><input type="text" name="txtNome" required></td>
                    </tr>

                    <tr>
                        <td>Gênero</td>
                        <td><input type="text" name="txtGenero" required></td>
                    </tr>

                    <tr>
                        <td>Público alvo</td>
                        <td><input type="text" name="txtPublico" required></td>
                    </tr>

                    
                    <tr>
                        <td>Data de Lançamento</td>
                        <td><input type="date" name="txtData" required></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Cadastrar"></td>
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