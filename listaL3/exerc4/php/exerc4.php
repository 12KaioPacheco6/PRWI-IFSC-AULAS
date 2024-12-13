<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Vetores em PHP - listaL3 - exercício 4 </h1>
 <?php
 //criando, manualmente, o vetor de preços, usando o nome de cada produto como índice do vetor
  $vetorPreco = ["Impressora" => 300.00, "Mouse" => 30.85, "Teclado" => 150.15];

  //inicialmente, vamos testar se algum produto foi comprado (ou não)
  $valorTotalCompra = 0;

  if(isset($_POST["produto"]))
  {
    //toda vez que o PHP recebe os dados de um checkbox, ele cria, automaticamente, um vetor de indice numérico. O conteúdo de cada célula do vetor é o value do checkbox selecionado.
    $vetorProdutosComprados = $_POST['produto']; 

    //para calcular o valor final da compra, temos de percorrer, com um forech, o vetor de produtos comprados, ir até o vetor de preços e fazer a somátoria dos preços acumulados
    foreach($vetorProdutosComprados as $produto) 
    {
      $valorTotalCompra = $valorTotalCompra + $vetorPreco[$produto];
    }

    $valorTotalCompraFormatada = number_format($valorTotalCompra,2,',', '.');

    echo "<p> Caro cliente, veja o valor final da sua compra: <br> <span> $valorTotalCompraFormatada </span>";
    echo "Relação de Produtos Comprados: <br> </p>";
    foreach ($vetorProdutosComprados as $produto)
      {
        echo "<span> $produto </span>";
      }
    echo "</p>";
  }

  else 
  {
    echo "<p> Nenhum produto comprado, Valor total da compra = R$0,00 </p>";
  }

 ?> 
</body>
</html>