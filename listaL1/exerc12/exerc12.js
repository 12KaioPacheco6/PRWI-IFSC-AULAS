function calcularMedia()
 {
 let objCaixaNome = document.getElementById('aluno');
 let aluno = objCaixaNome.value;

 let objCaixaNota1 = document.getElementById('nota1');
 let nota1 = objCaixaNota1.value;

 let objCaixaNota2 = document.getElementById('nota2');
 let nota2 = objCaixaNota2.value;

 let objCaixaNota3 = document.getElementById('nota3');
 let nota3 = objCaixaNota3.value;

 nota1 = parseFloat(nota1);
 nota2 = parseFloat(nota2);
 nota3 = parseFloat(nota3);

 let media = (nota1 + nota2 + nota3) / 3;

 media = media.toFixed(1);

 let objConteiner = document.getElementById("conteiner");
 objConteiner.innerHTML = "Resultado do cálculo da média: <br> Aluno = " + aluno + "<br> Média = " +media;

 objConteiner.setAttribute("class", "mostra");
 }

let objBotao = document.getElementById('botao');
objBotao.addEventListener('click', calcularMedia);

