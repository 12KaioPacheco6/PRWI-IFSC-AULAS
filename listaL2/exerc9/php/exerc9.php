<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 9 - resposta do PHP </h1>
 <?php
    $valorCompra = $_POST['valor-compra'];

    $acrescimo = 0;
    $desconto = 0;

    //testar os botões de rádios
    if(isset($_POST['forma-pagamento']))
    {
       $formaPagamento = $_POST['forma-pagamento'];
        if ($formaPagamento == "À vista")
        {
            $desconto = $valorCompra * 5/100;
        }
        else
        {
            $acrescimo = $valorCompra * 2/100;
        }

    }
    else
    {
        die ("<p> Você não informou a forma de pagamento (à vista ou a prazo)! </p>");
    }

    //testar o checkbox
    $mensagem = "o cliente não pagou a compra com cartão visa e não está a apto a participar do sorteio de automóvel.";

    if (isset($_POST['pagamento-cartão']))
    {
        $mensagem = "O cleinte pagou a compra com o cartão Visa e Está apto a participar do sorteio do automóvel.";
    }

    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;


    echo "<p> Dados do processamento de compra: <br>
            Valor final da compra <span> R$$valorFinalCompra </span> <br>
            $mensagem </p>";

 ?> 
</body>
</html>