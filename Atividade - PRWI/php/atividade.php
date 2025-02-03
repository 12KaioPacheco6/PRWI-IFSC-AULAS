<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="../css/atividade.css">
</head>

<body>
 <h1> Exerc-1 -- Avaliação </h1>
 <?php
  $chassi1 = $_POST['chassi1'];
  $chassi2 = $_POST['chassi2'];
  $chassi3 = $_POST['chassi3'];
  $chassi4 = $_POST['chassi4'];

  $fornecedor1 = $_POST['fornecedor1'];
  $fornecedor2 = $_POST['fornecedor2'];
  $fornecedor3 = $_POST['fornecedor3'];
  $fornecedor4 = $_POST['fornecedor4'];

  $preco1 = $_POST['preco1'];
  $preco2 = $_POST['preco2'];
  $preco3 = $_POST['preco3'];
  $preco4 = $_POST['preco4'];

  $chassiPesquisado = $_POST['pesquisa-chassi'];

  $matrizVeiculos = [
                     $chassi1 => [$fornecedor1, $preco1],
                     $chassi2 => [$fornecedor2, $preco2],
                     $chassi3 => [$fornecedor3, $preco3],
                     $chassi4=> [$fornecedor4, $preco4]
                    ];
  
  echo "<table>
         <caption> Relação de dados dos Veiculos Cadastrados na matriz </caption>
         <tr>
          <th> Número do chassi </th>
          <th> Nome do Fornecedor </th> 
          <th> Preço Veículo </th>
         </tr>";

   foreach($matrizVeiculos as $chassis => $vetorInterno)
    {
       echo "<tr>
              <td> $chassis </td>
              <td> $vetorInterno[0] </td>
              <td> $vetorInterno[1] </td>
             </tr>";
    }
  echo "</table>";

  foreach($matrizVeiculos as $chassis => $vetorInterno)
   {
   $vetorAux[$chassis] = $vetorInterno[1];
   }

  $precoMaisBarato = min($vetorAux);
  $codigoVeicMaisBarato = array_search($precoMaisBarato, $vetorAux);
  $nomeFornecedorBarato = $matrizVeiculos[$codigoVeicMaisBarato][0];
  echo "<p> Valor do Veiculo mais barato = <span> $precoMaisBarato </span> Nome do Fornecedor: <span> $nomeFornecedorBarato <span> </p>";

  $chassiEncontrado = array_key_exists($chassiPesquisado, $matrizVeiculos);
  if(!$chassiEncontrado)
   {
       echo "<p> Caro usuario, o chassi de número <span> $chassiPesquisado </span> não foi encontrado na matriz.  </p> ";
   }
   else 
   {
       $nomeFornec = $matrizVeiculos[$chassiPesquisado][0];
       $precoVeic = $matrizVeiculos[$chassiPesquisado][1];
       echo "<p> Dados do Veiculos pesquisado <br> 
                     Código: <span> $chassiPesquisado </span> <br> 
                     Nome: <span> $nomeFornec </span> <br> 
                     Preço: <span> $precoVeic </span>  </p>";
   }

   foreach($matrizVeiculos as $preco => $vetorInterno)
   {
       $vetorAux[$preco] = $vetorInterno[1];
   }

   krsort($vetorAux);

   echo "<table>
   <caption> Relação de dados dos medicamentos cadastrados na matriz </caption>
   <tr>
    <th> Código do Chassi </th>
    <th> Nome do Fornecedor </th> 
    <th> Preço do Veiculo </th>
   </tr>";

   foreach($vetorAux as $codChassi => $precos)
   {
       $fornecedores = $matrizVeiculos[$codChassi][0];
       echo "<tr> 
              <td> $codChassi</td> 
              <td> $fornecedores </td> 
              <td>  $precos <td> 
              </tr>";
   }
   echo "</table> ";
    
 ?> 
</body>
</html>