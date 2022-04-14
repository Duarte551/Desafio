<?php 

require_once __DIR__ . "./../vendor/autoload.php";
require_once __DIR__ . "./../app/db/conexao.php";

if (isset($_POST['submit'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
$a = new Database();
$a-> insert($nome, $email);

header('Location: ./../index.php');

} else {
    echo "Não Cadastrado";
}


?>