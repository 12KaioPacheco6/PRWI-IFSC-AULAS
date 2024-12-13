function acrescentarTexto()
 {
 //criar o objeto que representa o parágrafo vazio
 let objParag = document.getElementById("parag");
 
 //acrescentando texto ao parágrafo na página web
 objParag.innerHTML = "Este texto foi criado dinamicamente pela linguagem JavaScript. <a href='https://www.ifsc.edu.br/web/campus-florianopolis'> Clique aqui para visitar o site do IFSC </a>";
 }

let objBotao = document.getElementById("botao");
objBotao.addEventListener("click", acrescentarTexto);