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

   $nome1 = $_POST['aluno1'];
   $nome2 = $_POST['aluno2'];
   $nome3 = $_POST['aluno3'];
   
   $vetorAlunos = [$nome1 => $nota1, $nome2 => $nota2, $nome3 => $nota3];

   echo "<table>
      <caption> Relação de alunos academicos dos alunos do CTDS/PRW1 </caption>
      <tr>
        <th> Nome do Aluno </th>
        <th> Nota de PRW1 </th>
      </tr>";

      //para compormos o corpo da tabela necessitamos navegar por todo vetor e extrair os seus dados

      foreach($vetorAlunos as $nomeDoAluno => $notaDoAluno)
      {
        echo "<tr> 
                <td> $nomeDoAluno </td>
                <td> $notaDoAluno </td>
              </tr>";
      }
    echo "</table>";

    //para descobrir a maior nota do vetor, usamos o comando max() do PHP
    $maiorNota = max($vetorAlunos);
    
    //já temos a maior nota e basta pesquisarmos, no vetor, o indice que endereça esta maior nota. Fazemos com o comando array_search()
    $alunoMaiorNota = array_search($maiorNota, $vetorAlunos);
    echo "<p> Caro professor, a maior nota cadastrada no vetor é <span> $maiorNota </span> E o aluno que obteve essa maior nota é: <span> $alunoMaiorNota </span> </p>";

    arsort($vetorAlunos);
 ?> 
</body>
</html>