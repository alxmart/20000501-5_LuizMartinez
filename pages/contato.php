<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/contato.css">
  <title> Contato e Localização - Doces Caseiros Luizão </title>
</head>
<body>

  <header>
    <table border="3" bgcolor="orange" width="100%">
      <tr>
          <td align="center">
                  <img src="../images/luizao-doces-caseiros.png" alt="Banner da Empresa" height="150px">
          </td>
      </tr>
    </table>
  </header>

  <br>

  <nav>  
		<ul>
      <li> <a href="../pages/home.php?p=home">Home </a></li>      
		</ul>
  </nav> 
   
    <h1> Contato & Localização </h1>

    <p> 
     Endereço: Rua Amilar Alves, Número 100 <br>
     Bairro: Centro  -  Cidade: Campinas - SP <br>
     Fone: (19) 9999-9999 <br>
     E-mail: luizaodoces@luizaodocescaseiros.com 
    </p>

    <img id="mapa" src="../images/mapa.png" alt="Localização no mapa." width="500" height="250">


  <?php
    
    @$valor = $_GET["p"];

    if ($valor == "home") {require_once "../pages/home.php";}

  ?>

  <footer>
    
      <span id="cred"><small>Crédito da imagem: https://unsplash.com/photos/AztBkPnedc8. 
                      Free to use under Unsplash license. </small> </span>
   
  </footer>
  
</body>
</html>