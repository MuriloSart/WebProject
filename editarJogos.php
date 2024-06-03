<?php
    include 'buscaDeJogos.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Jogos Postados</title>
</head>
<body>
    <h1>Jogos Postados</h1>
    

    <?php foreach ($jogos as $jogo):?> 
    <form class = 'form-border' method="POST" action="editarDadosJogos.php">
  
        <h2><?php echo $jogo['titulo'];  ?></h2>
        
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($jogo['id']); ?>">

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="txtTitulo" value="<?php echo htmlspecialchars($jogo['titulo']); ?>"><br><br>

        <label for="sinopse">Sinopse:</label>
        <textarea id="sinopse" name="txtSinopse"><?php echo htmlspecialchars($jogo['sinopse']); ?></textarea><br><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="txtGenero" value="<?php echo htmlspecialchars($jogo['genero']); ?>"><br><br>

        <label for="publico">Público Alvo:</label>
        <input type="text" id="publico" name="txtPublico" value="<?php echo htmlspecialchars($jogo['publico_alvo']); ?>"><br><br>

        <input type="submit" value="Atualizar">
        
    </form>
    <?php endforeach; ?>
    <br>
    <h3>Só pode atualizar um jogo de cada vez</h3>
    <hr>

</body>
</html>
