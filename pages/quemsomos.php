<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/quemsomos.css">
  <title> Quem Somos - Doces Caseiros Luizão </title>
</head>
<body>

  <header>
    <table border="3" bgcolor="pink" width="100%">
      <tr>
          <td align="center">
                  <img src="./images/luizao-doces-caseiros.png" alt="Banner da Empresa" height="250px">
          </td>
      </tr>
    </table>
  </header>

  <br>
   
  <nav>  
		<ul>
      <li> <a href="./pages/home.php?p=home">Home </a></li>
			<li> <a href="./pages/contato.php?p=contato">Contato</a></li>
			<li> <a href="./pages/localizacao.php?p=localizacao">Localização</a></li>

      
		</ul>
  </nav> 

  <br>

  <section>

    <h1> Quem somos ? </h1>

    <p>  &nbsp &nbsp Nossa empresa nasceu em 2017, a partir do sonho de criar um negócio que  não apenas
        trouxesse retorno financeiro entregando algum produto em troca. Nós decidimos que nossa 
        empresa também traria felicidade e alegria aos nossos clientes. E para isso, nada melhor 
        que experimentar um delicioso doce caseiro, saboroso como aquels feitos por nossas mães 
        e nossas avós.</p>
   
  <section>  

  <?php
    
    @$valor = $_GET["p"];

    if ($valor == "home") {require_once "pages/home.php";}
    if ($valor == "contato") {require_once "pages/contato.php";}
    if ($valor == "localizacao") {require_once "pages/contato.php";}

  ?>  

  <footer>
    <p>
      
      <span id="cred"><small>Crédito da imagem: https://unsplash.com/photos/AztBkPnedc8. 
                      Free to use under Unsplash license. </small> </span>
    </p>
  </footer>
  
</body>
</html>