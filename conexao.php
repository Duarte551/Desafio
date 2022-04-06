<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "projeto";

    $conexao = mysqli_connect('localhost', 'root', '', 'projeto');
    if (mysqli_connect($server, $user, $pass, $bd) ) {
        echo "Funcionou essa porra!!";
    }
    else 
        echo "Erro!";
?>