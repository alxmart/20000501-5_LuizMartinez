<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/home.css">
  <title> Nosso Produtos - Doces Caseiros Luizão </title>
</head>
<body>

  <header>
    <table border="3" bgcolor="pink" width="100%">
      <tr>
          <td align="center">
                  <img src="../images/luizao-doces-caseiros.png" alt="Banner da Empresa"
                   height="250px">
          </td>
      </tr>
    </table>
  </header>

  <br>
   
    <h1> Nossos Produtos à Venda: </h1>

     <p> BRIGADEIRO. <a href="../pages/produto.php?p=produto"> Clique AQUI para 
      ver nossa página do brigadeiro !</a> </p>
 
    <img id="brigadeiro" src="../images/brigadeiro.jpg" alt="Doce Brigadeiro" height="250px">
         

  <?php
    
    @$valor = $_GET["p"];

    if ($valor == "produto") {require_once "../pages/produto.php";}

  ?>  

  <footer>
         
      <span id="cred"><small>Crédito da imagem: https://unsplash.com/photos/AztBkPnedc8. 
                      Free to use under Unsplash license. </small> </span>

      <br>                

      <span id="cred"><small>Crédito da imagem:https://www.pexels.com/pt-br/foto/feijao-vagem-brasil-cafe-da-manha-9285186/
                      Disponível para uso gratuito. </small> </span>

  </footer>
  
</body>
</html>