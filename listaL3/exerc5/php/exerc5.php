<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Vetores em PHP - listaL3 - exercício 5 </h1>
 <?php
   //recebendo valor do formulario e guardando em três variáveis simples
   $idade1 = $_POST['idade1'];
   $idade2 = $_POST['idade2'];
   $idade3 = $_POST['idade3'];

   //guardando as notas em vetores de indice númerico - primeira forma
   $vetorIdade[0] = $idade1;
   $vetorIdade[1] = $idade2;
   $vetorIdade[2] = $idade3;

   //usando uma segunda forma de criação do mesmo vetor acima
   $vetorIdade = [$idade1, $idade2, $idade3];

   //usando uma terceira forma de criação do vetor acima
   $vetorNotas = array($idade1, $idade2, $idade3);

   //exibindo os dados do vetor na página web
   echo "<pre>";
   print_r($vetorIdade);
   echo "</pre>";

   //calcular a média de nota dos três alunos, usando camandos prontos do PHP  para manipulação de vetores

   $mediaIdade = array_sum($vetorIdade)/count($vetorIdade);
   
   echo "<p> Média das idades: <span> $mediaIdade </span> </p>";
 ?> 
</body>
</html>