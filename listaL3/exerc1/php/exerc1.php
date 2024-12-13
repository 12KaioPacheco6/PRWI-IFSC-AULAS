<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Vetores em PHP - listaL3 - exercício 10 </h1>
 <?php
   //recebendo valor do formulario e guardando em três variáveis simples
   $nota1 = $_POST['nota1'];
   $nota2 = $_POST['nota2'];
   $nota3 = $_POST['nota3'];

   //guardando as notas em vetores de indice númerico - primeira forma
   $vetorNotas[0] = $nota1;
   $vetorNotas[1] = $nota2;
   $vetorNotas[2] = $nota3;

   //usando uma segunda forma de criação do mesmo vetor acima
   $vetorNotas = [$nota1, $nota2, $nota3];

   //usando uma terceira forma de criação do vetor acima
   $vetorNotas = array($nota1, $nota2, $nota3);

   //exibindo os dados do vetor na página web
   echo "<pre>";
   print_r($vetorNotas);
   echo "</pre>";

   //calcular a média de nota dos três alunos, usando camandos prontos do PHP  para manipulação de vetores

   $media = array_sum($vetorNotas)/count($vetorNotas);
   
   echo "<p> Média dos alunos: <span> $media </span> </p>";
 ?> 
</body>
</html>