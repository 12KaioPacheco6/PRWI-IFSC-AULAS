function trocarTema()
 {
 //vamos criar um objeto que representa a tag link, pois é ela que controla qual arquivo CSS está sendo usado pelo navegador para formatar o documento web
 let objLink = document.getElementById("link");
 let temaAtual = objLink.getAttribute("href");

 //agora, pedimos ao JavaScript para descobrir qual nome de arquivo css está armazenado na variável temaAtual. Em seguida, fazemos a troca de tema
 if(temaAtual == "tema1.css")
  {
  objLink.setAttribute("href", "tema2.css");
  }
 else
  {
  objLink.setAttribute("href", "tema1.css");
  }
 }

let objBotao = document.getElementById("botao");
objBotao.addEventListener("click", trocarTema);