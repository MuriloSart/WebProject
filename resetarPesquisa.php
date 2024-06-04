<?php 
    session_start();
    $_SESSION['pesquisa'] = null;
    header("Location: listaGeral.php");
?>