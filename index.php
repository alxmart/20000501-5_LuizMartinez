<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Doces Caseiros ACME</title>
</head>
<body>

  <header>
    <table border="3" bgcolor="pink" width="100%">
      <tr>
          <td align="center">
                  <img src="images/luizao-doces-caseiros.png" alt="Banner da Empresa" height="250px">
          </td>
      </tr>
    </table>
  </header>

  <br>
   
  <nav>  
		<ul>
      <li> <a href="pages/home.php?p=home">Home </a></li>
			<li> <a href="pages/quemsomos.php?p=quemsomos">Quem somos</a></li>
			<li> <a href="pages/contato.php?p=contato">Contato</a></li>
			<li> <a href="pages/localizacao.php?p=localizacao">Localização</a></li>

      
		</ul>
  </nav> 

  <br>

  <h1> Clique nos items do Menu acima para conhecer mais sobre os nossos Produtos e sobre a nossa Empresa </h1>
 
  <?php
    
    @$valor = $_GET["p"];

    if ($valor == "home") {require_once "pages/home.php";}
    if ($valor == "quemsomos") {require_once "pages/quemsomos.php";}
    if ($valor == "contato") {require_once "pages/contato.php";}
    if ($valor == "localizacao") {require_once "pages/contato.php";}

  ?>  

  <footer>
    <p>
      Curso: Sistemas para Internet <br>
      Nome: Luiz Alexandre Ferreira Martinez <br>
      RA: 20000501-5 
      <hr>
      <span id="cred"><small>Crédito da imagem: https://unsplash.com/photos/AztBkPnedc8. 
                      Free to use under Unsplash license. </small> </span>
    </p>
  </footer>
  
</body>
</html>