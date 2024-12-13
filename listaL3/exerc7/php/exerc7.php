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
   $idade1 = $_POST['idade1'];
   $idade2 = $_POST['idade2'];
   $idade3 = $_POST['idade3'];

   $nome1 = $_POST['pessoa1'];
   $nome2 = $_POST['pessoa2'];
   $nome3 = $_POST['pessoa3'];
   
   $vetorPessoas = [$nome1 => $idade1, $nome2 => $idade2, $nome3 => $idade3];
   
   //vamos ordenar o vetor pelas notas do aluno, descrecente, mantendo a associação, na ordem direta.
   ksort($vetorPessoas);

   echo "<table> 
          <caption> Relação de nome e idade </caption> 
          <tr> 
            <th> Nome da pessoa </th>
            <th> Idade da pessoa </th>
          </tr>";
    
    foreach ($vetorPessoas as $nomePessoa => $idadePessoa)
    {
      echo "<tr> 
           <th> $nomePessoa </th>
           <th> $idadePessoa </th>
          </tr>";
    }
    echo "</table>";
 ?> 
</body>
</html>