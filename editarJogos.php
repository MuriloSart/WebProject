<?php
    include 'buscaDeJogos.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jogos Postados</title>
</head>
<body>
    <h1>Jogos Postados</h1>

    <form method="POST" action="editarDadosJogos.php">
        <?php foreach ($jogos as $jogo):?> 
  
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
        <?php endforeach; ?>
        
        <input type="submit" value="Atualizar">
    </form>
    <hr>

</body>
</html>
