<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/includes/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>body{
    font-family: 'Ubuntu Condensed', sans-serif;
    background: rgb(0, 0, 0);
   color :rgb(0, 0, 0) ;
}

header {
    font-family: 'Ubuntu Condensed', sans-serif;
    background: #339;
    text-align: center

}

h2 {
    font-family: 'Ubuntu Condensed', sans-serif;
    color :rgb(0, 0, 0);
    text-shadow: 1.15px 1.15px 1.15px red;
}
p{  font-family: 'Ubuntu Condensed', sans-serif;
    color:rgb(0, 0, 0);
    text-shadow: 2px 2px 5px rgb(90, 165, 235);
    margin: 50px;
}
ul {
    font-family: 'Ubuntu Condensed', sans-serif;
    display:flex;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    justify-content: space-between;
  }
  
  li {
    display: block;
    float: left; 
    text-align: center;
    text-decoration: none;
    font-family: 'Ubuntu Condensed', sans-serif;
  }
  
  li a {
    display: block;
    color: black;
    text-align: top;
    padding: 14px 16px;
    text-decoration: none;
    font-family: 'Ubuntu Condensed', sans-serif;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: rgb(70, 51, 190);}

    li{font-family: 'Ubuntu Condensed', sans-serif;
      display: block
    }
    img{
      width: 50%;
    
    }
    footer{
      font-family: 'Ubuntu Condensed', sans-serif;
      text-align: center;
      position: fixed; bottom: 0; left: 0; right: 0;
      left: 0;
      right: 0;
      background-color: #333;
      }
      
      small{
        font-family: 'Ubuntu Condensed', sans-serif;
        color: white
      }
      
      a{ font-family: 'Ubuntu Condensed', sans-serif; 
        color:rgb(245, 0, 204);}
    
      #teste{
        padding-top: 10%;
        text-align: center;

      }
      img{
        width: 15%;
        
      }
.indicação{
  color: rgb(255, 255, 255);
  background-color: rgb(116, 1, 1);
  margin: 0;
  padding: 0;
}
label{
  font-family: 'Ubuntu Condensed', sans-serif;
}
input{  font-family: 'Ubuntu Condensed', sans-serif;}
h1{ font-family: 'Ubuntu Condensed', sans-serif;}

#corpo{ background-color:#d6d6d6}

#foto{
  border-radius: 10px;  
  float: left;
  margin: 20px;
  padding-top: 1px;
}

h3 {
  font-family: 'Ubuntu Condensed', sans-serif;
  color:rgb(0, 0, 0);
  text-shadow: 2px 2px 5px rgb(0, 255, 234);
  margin: 50px;}
  .dropbtn {
    background-color: #000291;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
    background-color: #000291;
  }
  #button{  background-color: whitesmoke;
            color: black;
  }
  #button:hover{
    color: black;
    background-color: rgb(70, 51, 190);
  }
  
  #cadastrar{color: white;}
  </style>
</head>
<header><div id="start"> 
        <img src="./includes/sou_energy_logo-1.png">
        <h1>Bem vindo ao projeto: Sou Future</h1>

        <nav class="navbar navbar-expand-lg navbar-dark bg-none" style="background-color: #333;">
            <div class="container-fluid" style="background-color: #333; color: white;">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="indicação" class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>                  
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                  <button id="button" class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
                <div>
                  <li><a id="cadastrar" class="nav-link active" aria-current="page" href="./utilities/cadastrar.php">Cadastre-se</a></li></div>
                </ul>
              </div>
            </div>
          </nav>
    </div></header>
<body>

      </form>
    </div>
  </div>
</nav>
</body>
</html>

