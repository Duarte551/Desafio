<?php 

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/db/conexao.php";

if (isset($_POST['submit'])){
$id = $_POST['id'];  
$nome = $_POST['nome'];
$email = $_POST['email'];


$a = new Database();
$dados = $a->update($nome, $email, $id);

header('Location: ./../index.php');
} else 
{};
?>