function converterTemperatura()
 {
 //criando o objeto que representa a caixa onde será digitada a temperatura Fahrenheit
 let objCaixaTemp = document.getElementById('tempF');
 let tempF = objCaixaTemp.value;

 //efetuar a transformação da temperatura para Celsius - cuidado com operadores matemáticos no JavaScript: se houver soma, devemos, antes de executar a soma, converter a string numérica para um número verdadeiro. Veremos isto mais adiante
 let tempC = (5/9) * (tempF - 32);

 //formatando a temperatura em gruas Celsius para duas casas decimais
 tempC = tempC.toFixed(2);

 //mostrar, dentro da div, a temperatura transformada
 let objConteiner = document.getElementById("conteiner");
 objConteiner.innerHTML = "Resultado da conversão termométrica: <br> Temperatura original, em ºF = " + tempF + "<br> Temperatura convertida para ºC = " + tempC;

 //neste ponto do código, lembrar que a div, na página web, está oculta. Como faremos para ela se tornar visível? Lembram da classe mostra no CSS? Então, basta usar um comando da linguagem que aplica a classe "mostra" à própria tag div
 objConteiner.setAttribute("class", "mostra");
 }

 //-------------------------------------------------------------------

function esconderDiv()
 {
 //para escondermos a div novamente, basta atribuirmos a string vazia à classe mostra. Fazemos isso com o método setAttribute novamente
 this.setAttribute("class", "");
 }


//disparando o evento click sobre o botão
let objBotao = document.getElementById('botao');
objBotao.addEventListener('click', converterTemperatura);

//criando o objeto div e associando o evento click a ele
let objDiv = document.getElementById("conteiner");
objDiv.addEventListener('click', esconderDiv);
