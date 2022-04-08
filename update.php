<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
  </head>
  <body>
  <?php 
    
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM dados WHERE cod_pessoa = $id";
    
    $dados = mysqli_query($conn, $sql);

    $linha = mysqli_fetch_assoc($dados);
  
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Atualizar</h1>
                    <form action="update_script.php" method="post">
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" name="nome" required value="<?php echo $linha['Nome'];?>">
                        </div>
                        <div class="form-group">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome" required value="<?php echo $linha['Sobrenome'];?>">   
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['Telefone'];?>">       
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required value="<?php echo $linha['Email'];?>">                          
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" required value="<?php echo $linha['Senha'];?>">                          
                        </div>
                        <div class="form-group"> <br>
                            <input type="submit" class="btn btn-success" value='Salvar alterações'>
                            <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']?>">
                        </div>      
                    </form> <br>
                    <a href="pesquisa.php" class="btn btn-info">Início</a>
            </div>
        </div>
    </div> 
    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


