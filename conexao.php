<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "registro";

    $conexao = mysqli_connect('localhost', 'root', '', 'registro');
    if ($conn = mysqli_connect($server, $user, $pass, $bd) ) {
    }
    else 
        echo "Erro!";

        function mensagem ($texto, $tipo){
        echo  "<div class='alert alert-$tipo' role='alert'>
                $texto
                </div>";

        }
?>