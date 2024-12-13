<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Fundamentos da linguagem PHP </title>
 <link rel="stylesheet" href="../css/formata-pagina.css">
</head>

<body>
 <h1> Vetores em PHP - listaL3 - exercício 6 </h1>
 <?php
   //recebendo valor do formulario e guardando em três variáveis simples
   $idade1 = $_POST['idade1'];
   $idade2 = $_POST['idade2'];
   $idade3 = $_POST['idade3'];

   $nome1 = $_POST['pessoa1'];
   $nome2 = $_POST['pessoa2'];
   $nome3 = $_POST['pessoa3'];

   //vamos criar o vetor, usando o nome de cada aluno como indice associativo
   $vetorIdade = [$nome1 => $idade1, $nome2 => $idade2, $nome3 => $idade3];
  /*
   echo "<pre>";
   print_r($vetorAlunos);
   echo "</pre>";*/

   echo "<table>
      <caption> Relação dos Individuos cadastrados </caption>
      <tr>
        <th> Nome da Pessoa </th>
        <th> Idade da Pessoa </th>
      </tr>";

      //para compormos o corpo da tabela necessitamos navegar por todo vetor e extrair os seus dados

      foreach($vetorIdade as $nomePessoa => $idadePessoa)
      {
        echo "<tr> 
                <td> $nomePessoa </td>
                <td> $idadePessoa </td>
              </tr>";
      }
    echo "</table>";

    //para descobrir a menor idade do vetor, usamos o comando min () do PHP
    $menorIdade = min($vetorIdade);
    
    //já temos a maior nota e basta ,pesquisarmos, no vetor, o indice que endereça esta maior nota. Fazemos com o comando array_search()
    $pessoaMenorIdade = array_search($menorIdade, $vetorIdade);
    echo "<p> Caro Funcionario, a menor idade cadastrada no vetor é <span> $menorIdade </span> E a pessoa que obteve essa menor idade é: <span> $pessoaMenorIdade </span> </p>";
 ?> 
</body>
</html>