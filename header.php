<?php
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            echo "Virtual Games <br><br>";
            if(isset($_SESSION['login']))
            {
                if ($_SESSION['login']) 
                    echo "Você está logado como: ". $_SESSION['nome'] . " ";
                else
                    echo "Você não está logado.";
            }
            else
                echo "Você não está logado.";

            if(isset($_SESSION['admin']))
            {
                if ($_SESSION['admin'])
                    echo "<br><br> Você é admin";
            }   
        ?>