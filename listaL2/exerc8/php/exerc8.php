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
    $valorCompra = $_POST['valor-compra'];

    $desconto = 0;
    if(isset($_POST['forma-pagamento']))
    {
        //o checkbox foi marcado
        $desconto = $valorCompra * 5/100;
    }

    $acrescimo = 0;
    if(isset($_POST['forma-pagamento']))
    {
        $acrescimo = $valorCompra * 2/100;
    }

    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

    $valorCompraFormatada = number_format($valorCompra, 2, ",", ".");
    $valorAcrescimoFormatada = number_format($acrescimo, 2, ",", ".");
    $valorDescontoFormatada = number_format($desconto, 2, ",", ".");
    $valorFinalFormatada = number_format($valorFinalCompra, 2, ",", ".");


   echo "<p> Usuário - Dados Finais
            <br> Valor final da compra pago pelo cliente: <span> R$$valorFinalFormatada </span> 
            <br> Desconto: <span> R$$valorDescontoFormatada </span> 
            <br> Acrescimo de entrega: <span> R$$valorAcrescimoFormatada </span> 
             </p>";

 ?> 
</body>
</html>