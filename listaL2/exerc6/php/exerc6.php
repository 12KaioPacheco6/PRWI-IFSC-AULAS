<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 6 - resposta do PHP </h1>
 <?php

 $compraCliente = $_POST['quanti-cliente'];
 $taxaComissao = $_POST['taxa-comissao'];

 $valorComissaoVendedor = $compraCliente * $taxaComissao/100;

 $valorComissaoVendedorFormatado = number_format($valorComissaoVendedor, 2, ",", ".");

 echo "<p> LOJA SKM <br> Valor da comissão do vendedor: <span> R$$valorComissaoVendedorFormatado </span> </p>";
 ?> 
</body>
</html>