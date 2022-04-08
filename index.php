
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Projeto</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Bem Vindo</h1>
                <hr class="my-4">
                <p>Acesse as funções</p>
                <a class="btn btn-primary btn-lg" href="cadastrar.php" role="button">Cadastrar</a>
                <a class="btn btn-primary btn-lg" href="login.php" role="button">Login</a>
                </div>
            </div>
        </div>
    </div> 

    <?php 
        $pesquisa = $_POST['busca'] ?? '';
    
    include "conexao.php";

    $sql = "SELECT * FROM dados WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="index.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name='busca'>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </nav>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
        <?php

while ($linha = mysqli_fetch_assoc($dados) ){
    $cod_pessoa = $linha ['cod_pessoa'];
    $nome = $linha ['Nome'];
    $sobrenome = $linha ['Sobrenome'];
    $telefone = $linha ['Telefone'];
    $email = $linha ['Email'];

        echo  "<tr>
            <th scope='row'>$nome</th>
            <td>$sobrenome</td>
            <td>$telefone</td>
            <td>$email</td>
        </tr>";
        }
      ?>
        </tbody>
        </table>
                    <a href="index.php" class="btn btn-info">Início</a>
            </div>
        </div>
    </div> 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>