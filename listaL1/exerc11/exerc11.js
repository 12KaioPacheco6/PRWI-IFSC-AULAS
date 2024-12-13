function calcularArea()
 {
 let objCaixaRaio = document.getElementById('raio');
 let raio = objCaixaRaio.value;

 let area = raio * raio * Math.PI;

 area = area.toFixed(1);

 let objConteiner = document.getElementById("conteiner");
 objConteiner.innerHTML = "Resultado do cálculo da área da circunferência: <br> Valor do raio = " + raio + "<br> Valor da área calculada = " + area;

 objConteiner.setAttribute("class", "mostra");
 }

let objBotao = document.getElementById('botao');
objBotao.addEventListener('click', calcularArea);

