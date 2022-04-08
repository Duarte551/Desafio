<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
         <title>Login</title>
         <link rel="stylesheet" type="text/css" href="/includes/resources/login.css">
        <style>#corpo{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("https://images2.alphacoders.com/542/thumb-1920-542730.png");
    width: 10%;
}
#tela_login {
    background-color:black;
    position:absolute; 
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    padding: 50px;
    border-radius: 15px;
    color:whitesmoke;
    }

input {
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}
.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
}
.inputSubmit:hover{
    background-color:deepskyblue;
    cursor : pointer;
}

a {
    text-decoration: none;
}</style>
    </head>

<body id="corpo">


    <div id="tela_login">
      <h1>Login</h1>
      <form action="validar.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <br> <br>
      <input type="password" name="senha" placeholder="Senha" required>
      <br> <br>
      <input class="inputSubmit" type="submit" name="submit" value="Enviar">
      </form>

    </div>
</body>

</html>