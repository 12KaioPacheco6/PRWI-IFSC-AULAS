<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 2 - resposta do PHP </h1>
 <?php
  $distancia = $_POST['distancia'];
  $consumo   = $_POST['consumo'];
  $preco     = $_POST["preco"];

  //calculando a quantidade de litros de combustível gastos na viagem
  $litrosGastos = $distancia / $consumo;

  //calculando o valor gasto, em reais, para a viagem feita
  $gastoEmReais = $preco * $litrosGastos;

  //mostramos o resultado dos gastos da viagem na página web
  echo "<p> Resultado do processamento da viagem da Maria: <br>
            Gasto, em reais, com a viagem: R$$gastoEmReais <br>
            Quantidade de litros gastos na viagem: $litrosGastos litros <br>
            Preço do litro de combustível: R$$preco </p>";
  
 ?> 
</body>
</html>