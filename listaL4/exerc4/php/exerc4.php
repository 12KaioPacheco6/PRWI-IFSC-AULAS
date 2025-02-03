<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Matrizes na linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Matrizes em PHP - listaL4 - exercício 4 </h1>
 <?php
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  $media1  = $_POST['media1'];
  $media2  = $_POST["media2"];
  $media3  = $_POST["media3"];

  $matrizAlunos = [$matric1 => [$aluno1, $media1],
                   $matric2 => [$aluno2, $media2],
                   $matric3 => [$aluno3, $media3]];

  //para encontrar o aluno pesquisado na matriz, começamos recebendo seu nome do fomrmulário
  $alunoPesquisado = $_POST['pesquisa-aluno'];

  $encontrou = false;
  //vamos percorrer, com o foreach, a matriz, e perguntar ao PHP se ele encontrou o aluno pesquisado
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   if($alunoPesquisado == $vetorInterno[0])
    {
    $encontrou = true;
    $matriculaDoAlunoPesquisado = $matric;
    $mediaDoAlunoPesquisado     = $vetorInterno[1];
    }
   }

  if($encontrou)
   {
   echo "<p> Dados do aluno pesquisado: <br>
             Nome: <span> $alunoPesquisado </span> <br>
             Matrícula: <span> $matriculaDoAlunoPesquisado </span> <br>
             Média de PRW1: <span> $mediaDoAlunoPesquisado </span> </p>";
   }
  else
   {
   echo "<p> O aluno pesquisado, com nome <span> $alunoPesquisado </span> não está cadastrado na matriz. </p>";
   }
  ?> 
</body>
</html>