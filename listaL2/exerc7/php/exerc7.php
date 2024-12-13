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

    //fazendo php receber o value do botão de rádio selecionado. Antes disso, vamos testar se o botão de rádio foi marcado

    if(isset($_POST['forma-pagamento']))
    {
        $formaPagamento = $_POST['forma-pagamento'];
        if($formaPagamento == "sim") 
        {
            $desconto = $valorCompra * (5/100);
        }
        else 
        {
            $desconto = 0;
        }

    }
    else
    {
        exit("<p> ERRO! Selecine alguma opção sobre as informações! </p>");
    }

    $acrescimo = 0;
   if (isset($_POST['forma-entrega']))
   {
        $formaEntrega = $_POST['forma-entrega'];
        if ($formaEntrega == "sim")
        {
            $acrescimo = $valorCompra * (2/100);
        }
   }
   else
   {
        die("<p> ERRO! Selecine alguma opção sobre as informações! </p>");
   }

   $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
   $valorFinalCompra = number_format($valorFinalCompra, 2, ",", ".");

   echo "<p> Caro usuário, de acordo com os dados fornecidos, o valor final da compra pago elo cliente é de <span> $valorFinalCompra </span> <br> Desconto: <span> $desconto </span> <br> Acrescimo de entrega: <span> $acrescimo </span>  </p>";

 ?> 
</body>
</html>