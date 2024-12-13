function somarValores()
 {
 let objCaixa1 = document.getElementById("idade");
 let objCaixa2 = document.getElementById("saldo");

 let idade = objCaixa1.value;
 let saldo = objCaixa2.value;

 //vamos realizar a soma das duas variáveis
 let soma;

 //antes de efetuarmos a soma, devemos converter a string dentro de cada variável para um valor numérico de fato
 idade = parseInt(idade); //NaN será guardado na variável se a conversão numérica falhar
 saldo = parseFloat(saldo);

 soma  = idade + saldo;

 //criando o objeto div
 let objDiv = document.getElementById('conteiner');
 objDiv.innerHTML = "O valor da soma da idade com a conta bancária é = " + soma;
 
 //mostrando a div
 objDiv.setAttribute("class", "mostra");
 }

let objBotao = document.getElementById('botao');
objBotao.addEventListener("click", somarValores);