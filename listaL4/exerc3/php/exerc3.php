<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Vetores em PHP - listaL4 - Exercício 3 </h1>
 <?php
  
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST['matric1'];
  $matric2 = $_POST['matric2'];
  $matric3 = $_POST['matric3'];

  $media1= $_POST['media1'];
  $media2= $_POST['media2'];
  $media3= $_POST['media3'];

  //criando a matriz em PHP: a matricula será o indice I da matriz 
  $matrizAlunos = [$matric1 => [$aluno1, $media1], $matric2 => [$aluno2, $media2], $matric3 => [$aluno3, $media3]];

  //para descobrirmos todos os dados do aluno com a maior média individual, vamos, com um foreach, criar um vetor auxiliar. Este vetor conterá  a matrícula com índice associativo, e a média de cada aluno, dentro da célula do vetor
  foreach($matrizAlunos as $matric => $vetorInterno)
  {
    $vetorAuxiliar[$matric] = $vetorInterno[1];
  }
  //Neste ponto, já temos, no vetorAuxiliar, a matrícula de cada aluno (indice) e a média parcial (conteúdo). Vamos usar a função max()
  $maiorNota = max($vetorAuxiliar);

  //Já sabemos o valor da maior nota, vamos usar a função array_searxh para descobrirmos a matricula do aluno com a maior nota
  $matriculaDestaque = array_search($maiorNota, $vetorAuxiliar);

  //Para descobrirmos o nome do aluno destaque, basta utilizarmos a sua matrícula de alunos como índice I. O valor do índice J é o zero
    $nomeDestaque = $matrizAlunos[$matriculaDestaque][0];

    echo "<p> Dados Cadastrais do aluno com a maior média: <br>
              Nome: <span> $nomeDestaque </span>
              Mátricula: <span> $matriculaDestaque </span> 
              Maior média: <span> $maiorNota </span> </p>";
 ?> 
</body>
</html>