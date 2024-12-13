<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 5 - resposta do PHP </h1>
 <?php
 define ("TAXA_CAMBIO", 5.75);

 $quantosDolares = $_POST['quantiDolares']; 
 $converReais = $quantosDolares * TAXA_CAMBIO;

 $quantiDolaresFormatada = number_format($quantosDolares, 2, ",", ".");
 $quantiReaisFormatada = number_format($converReais, 2, ",", ".");

 echo "<p> Dólares convertido para Reais <br> <br>
                Dólar fornecido para conversão: <span> 
                US$$quantiDolaresFormatada </span> <br>
                Valor de dólares convertido para Reais: <span>
                R$$quantiReaisFormatada </span> <br>
                Taxa de conversão: <span> 
                R$", TAXA_CAMBIO ,"</span> </p>"
 ?> 
</body>
</html>