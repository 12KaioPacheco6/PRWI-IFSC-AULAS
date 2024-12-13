<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 10 </h1>
 <?php
    $valorCompra = $_POST['valor-compra'];

    if(!isset($_POST['faixa-etaria']))
    {
        die("<p> A faixa etária precisa ser FORNECIDA! </p>");
    }

    $faixaEtaria = $_POST["faixa-etaria"];
    $desconto = 0;

    //testando que faixa etária está o cliente 
    if($_POST["faixa-etaria"]  == "Entre 55 e 70 anos")
    {
        $desconto = 5;
    }
    else 
    {
        $desconto = 7;
    }

    //testado se o cliente pagou com o cartão fidelidade
    if(isset( $_POST["cartao-fidelidade"]))
    {
        $desconto += 5;
    }


    $valorDoDesconto = $valorCompra * $desconto/100;

    $valorFinalCompra = $valorCompra - $valorDoDesconto;

    $valorCompraFormatada = number_format( $valorCompra,2,",",".");
    $valorDoDescontoFormatada = number_format( $valorDoDesconto,2,",",".");
    $valorFinalCompraFormatada = number_format( $valorFinalCompra,2,",",".");
    $descontoFormatada = number_format($desconto, 2, ",", ".");

    echo "<p> RESULTADO DA VENDA DOS MEDICAMENTOS <br>
                Valor inicial da compra: <span> R$$valorCompraFormatada </span> <br>
                Valor de desconto obtida: <span> {$desconto}% </span> <br>
                Valor do desconto concedido: <span> R$$valorDoDescontoFormatada </span> <br>
                Valor final da compra: <span> R$$valorFinalCompraFormatada </span> </p>" 
 ?> 
</body>
</html>