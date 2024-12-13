<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos do PHP - listaL2 - exercício 1 - resposta do PHP </h1>
 <?php
  //nesta área, podemos ter somente comandos da linguagem PHP - vamos criar variáveis em PHP para guardar os dados que vieram do formulário
  $nomeDoAluno = $_POST['nome-aluno'];
  $nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $peso1       = $_POST["peso1"];
  $peso2       = $_POST["peso2"];
 
  //vamos utilizar os valores das variáveis e calcular a média ponderada do aluno
  $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

  //fazendo a saída de dados, a ser exibida pelo navegador, com a página de resposta ao usuário

  echo "<p> Caro professor, o aluno de nome $nomeDoAluno obteve média ponderada igual a $media </p>";
 ?> 
</body>
</html>