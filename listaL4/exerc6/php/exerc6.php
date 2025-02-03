<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 6 </h1>
 <?php
  $medic1 = $_POST['medic1'];
  $medic2 = $_POST['medic2'];
  $medic3 = $_POST['medic3'];

  $cod1   = $_POST["cod1"];
  $cod2   = $_POST["cod2"];
  $cod3   = $_POST["cod3"];
  
  $preco1  = $_POST["preco1"];
  $preco2  = $_POST["preco2"];
  $preco3  = $_POST["preco3"];

  $codigoPesquisado = $_POST['pesquisa-codigo'];

  $matrizRemedios = [$cod1 => [$medic1, $preco1],
                     $cod2 => [$medic2, $preco2],
                     $cod3 => [$medic3, $preco3]
                    ];

  
  echo "<table>
         <caption> Relação de dados dos medicamentos cadastrados na matriz </caption>
         <tr>
          <th> Código do Chass </th>
          <th> Nome do Fornecedor </th> 
          <th> Preço do Veiculo </th>
         </tr>";

   foreach($matrizRemedios as $codigo => $vetorInterno)
    {
       echo "<tr>
              <td> $codigo </td>
              <td> $vetorInterno[0] </td>
              <td> $vetorInterno[1] </td>
             </tr>";
    }
  echo "</table>";

  foreach($matrizRemedios as $codigo => $vetorInterno)
   {
   $vetorAux[$codigo] = $vetorInterno[1];
   }

  $precoMaisBarato = min($vetorAux);
  $codigoMedicMaisBarato = array_search($precoMaisBarato, $vetorAux);
  $nomeMedicMaisBarato = $matrizRemedios[$codigoMedicMaisBarato][0];
  echo "<p> Medicamento mais barato = <span> $nomeMedicMaisBarato </span> </p>";

  $codigoEncontrado = array_key_exists($codigoPesquisado, $matrizRemedios);
  if(!$codigoEncontrado)
   {
       echo "<p> Caro usuario, o medicamento de codigo <span> $codigoPesquisado </span> não foi encontrado na matriz.  </p> ";
   }
   else 
   {
       $nomeMedic = $matrizRemedios[$codigoPesquisado][0];
       $precoMedic = $matrizRemedios[$codigoPesquisado][1];
       echo "<p> Dados do medicamento pesquisado <br> 
                     Código: <span> $codigoPesquisado </span> <br> 
                     Nome: <span> $nomeMedic </span> <br> 
                     Preço: <span> $precoMedic </span>  </p>";
   }

   foreach($matrizRemedios as $codigo =>  $vetorInterno)
   {
       $vetorAux[$codigo] = $vetorInterno[0];
   }

   asort($vetorAux);

   echo "<table>
   <caption> Relação de dados dos medicamentos cadastrados na matriz </caption>
   <tr>
    <th> Código do medicamento </th>
    <th> Nome do medicamento </th> 
    <th> preço do medicamento </th>
   </tr>";
   foreach($vetorAux as $codigo =>$medicamentos)
   {
       $preco = $matrizRemedios[$codigo][1];
       echo "<tr> 
              <td> $codigo </td> 
              <td> $medicamentos </td> 
              <td>  $preco <td> 
              </tr>";
   }
   echo "</table> "



  //vamos percorrer a matriz e criar um vetor auxiliar. O índice será a matrícula e o conteúdo de cada célula será a média de PRW1
  //foreach($matrizAlunos as $matric => $vetorInterno)
   //{
   //$vetorAux[$matric] = $vetorInterno[1];
   //}

  //agora, vamos usar o seguinte método de ordenação sobre o vetor auxiliar: arsort
  //arsort($vetorAux);

  //print_r($vetorAux);

  //por fim, percorremos o vetor já ordenado com o laço foreach, e mostramos os dados ordenados na tabela. A última informação da ordenação é buscada na própria matriz (nome do aluno), por meio de sua matrícula
    
 ?> 
</body>
</html>