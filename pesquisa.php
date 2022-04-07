<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pesquisar</title>
  </head>
  <body>
    
<?php 
        $pesquisa = $_POST['busca'] ?? '';
    
    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="pesquisa.php" method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name='busca'>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </nav>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Funções</th>
            </tr>
        </thead>
        <tbody>
        <?php

while ($linha = mysqli_fetch_assoc($dados) ){
    $cod_pessoa = $linha ['cod_pessoa'];
    $nome = $linha ['nome'];
    $endereco = $linha ['endereco'];
    $telefone = $linha ['telefone'];
    $email = $linha ['email'];
    $data_nascimento = $linha ['data_nascimento'];
    $data_nascimento = mostra_data($data_nascimento);

        echo  "<tr>
            <th scope='row'>$nome</th>
            <td>$endereco</td>
            <td>$telefone</td>
            <td>$email</td>
            <td>$data_nascimento</td>
            <td width=150px>
                <a href='update.php?id=$cod_pessoa' class='btn btn-success btn'>Update</a>
                <a href='#' class='btn btn-danger btn btn-sm' data-toggle='modal' data-target='#confirma'
                onclick=".'"'. "pegar_dados($cod_pessoa, '$nome')" . '"'. ">Delete</a>
            </td>
        </tr>";
        }
      ?>
        </tbody>
        </table>
                    <a href="index.php" class="btn btn-info">Início</a>
            </div>
        </div>
    </div> 


    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar Exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="script_excluir.php" method="POST">
        <p>Deseja realmente excluir </p> <p><b id=nome_pessoa>nome da pessoa </b>?</p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <input type="hidden" name="nome" id="nome_pessoa_1" value="">
        <input type="hidden" name="id" id="cod_pessoa" value="">
        <input type="submit" class="btn btn-danger"value="Excluir">
    </form>
      </div>
    </div>
  </div>
</div>

        <script type="text/javascript">
            function pegar_dados (id, nome){
                document.getElementById('nome_pessoa'). innerHTML = nome;
                document.getElementById('nome_pessoa_1'). value = nome;
                document.getElementById('cod_pessoa'). value = id;
            }

        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> 


