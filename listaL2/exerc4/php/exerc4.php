<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 1 - resposta do PHP </h1>
 <?php
    $tempF = $_POST['temp-F'];
    $tempC = ($tempF - 32) * (5/9);

    //formatação de vaiavéis númericas com PHP
    $tempCFormatada = number_format($tempC, 1, ",", ".");
    $tempFFormatada = number_format($tempF, 1, ",", ".");

    //formatação de variáveis númericas com PHP
    echo "<p> Resultado do conversor termométrico: <br>
            Temperatura fornecida em °F: <span> $tempFFormatada </span> <br>
            Temperatura convertida para °C: <span> $tempCFormatada </span> </p>"

 ?> 
</body>
</html>