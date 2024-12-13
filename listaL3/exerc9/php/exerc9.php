<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Vetores em PHP - listaL3 - exercício 9 </h1>
 <?php

  $vetorPreco = ['pacoca' => 3.00, 'arroz' => 6.00, 'macarrao' => 4.00, 'feijao' => 8.00];
  
  $valorCompra = 0;
  if(isset($_POST['alimento']))
  {
    $vetorAlimentoComprados = $_POST['alimento'];

    foreach($vetorAlimentoComprados as $alimento )
    {
      $valorCompra = $valorCompra + $vetorPreco[$alimento];
    }
  }

  $desconto = 0;
  if(isset($_POST["fidelidade"]))
  {
    $desconto = $valorCompra *5/100;
  }
 
  $valorFinal = $valorCompra -  $desconto;
  $valorFinalFormatada = number_format( $valorFinal,2,",",".");
  echo "<p> Valor Final da Compra <span> R$$valorFinalFormatada </span> </p>"
 ?> 
</body>
</html>