<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 3 - resposta do PHP </h1>
 <?php
  //criando constantes na linguagem PHP
  define('TAXA_DESCONTO', 10/100);
  define("PERCENTUAL_ICMS", 12/100);
  define("PERCENTUAL_COMISSAO", 5/100);

  //recebimento dos dados do formulário - usando o método get
  $valorVenda = $_GET['valor-compra'];

  //calcular o valor do desconto dado ao cliente
  $descontoDoCliente = $valorVenda * TAXA_DESCONTO;

  //calcular o valor do ICMS pago
  $valorICMS = $valorVenda * PERCENTUAL_ICMS;

  //calcular o valor da comissão do vendedor
  $comissaoDoVendedor = $valorVenda * PERCENTUAL_COMISSAO;

  //calcular o valor final pago pelo cliente, após o desconto
  $valorFinalPagoPeloCliente = $valorVenda - $descontoDoCliente;


  echo "<p> Resultado do processamento da venda: <br>
            Valor da compra feita pelo cliente: R$$valorVenda <br>
            Valor do desconto dado pela loja: R$$descontoDoCliente <br>
            Valor do ICMS devido: R$$valorICMS <br>
            Valor da comissão do vendedor: R$$comissaoDoVendedor <br> 
            Valor da taxa de desconto: ", TAXA_DESCONTO * 100, "%<br> <br>

            <span> Valor final pago pelo cliente: R$$valorFinalPagoPeloCliente </span> </p>";
 ?> 
</body>
</html>