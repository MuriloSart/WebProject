<?php
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
        ?>