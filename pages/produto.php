<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/produto.css">
  <title> BRIGADEIRO - Doces Caseiros Luizão </title>
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
  
  <?php

  $valores = [
    ["id" => 1,
      "Doce" => "Brigadeiro",
      "Quantidademinima" => 50,
      "Valor" => 85.00,
      "Prazoproducaodias" => 3,
      "Prazocomentregadias" => 4,
      "Ingredientes" => "Açucar, leite cond,chocolate belga",
    ],
        
  ];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brigadeiro - Informações </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <h1> INFORMAÇÕES - BRIGADEIRO - Luizão Doces Caseiros </h1>
    
  <table>
    <tr>
      <th> Doce </th>
      <th> Quantidade Mínima </th>
      <th> Valor </th>
      <th> Prazo Produção em Dias </th>
      <th> Prazo Com Entrega em Dias </th>
      <th> Ingredientes </th>
    </tr>

    <?php foreach($valores as $resultado):
      
    ?>

    <tr>
      <td> <?php echo $resultado["Doce"] ?> </td>

      <td> <?php echo $resultado["Quantidademinima"] ?> </td>

      <!-- <td> <?php echo $resultado["Valor"] ?> </td> -->

      <td> <?php echo 'R$' . ' ' .  number_format($resultado["Valor"], 2, ",", ".") ?> </td>

      <td> <?php echo $resultado["Prazoproducaodias"] ?> </td>

      <td> <?php echo $resultado["Prazocomentregadias"] ?> </td>

      <td> <?php echo $resultado["Ingredientes"] ?> </td>

    </tr>

      <?php endforeach;?>

    </table>

  </body>
</html>