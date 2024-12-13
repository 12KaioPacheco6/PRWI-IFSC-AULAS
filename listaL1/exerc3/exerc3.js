//declarando e implementando a função que será chamada pelo JavaScript assim que o evento click for disparado sobre o parágrafo com id igual a "parag"
function trocarCorDoTexto()
 {
 //aqui, dentro da função, o this representa o próprio parágrafo da página web
 this.style.color = "red";
 }


//representando o parágrafo de id "parag" como se fosse um objeto do JavaScript, por meio DOM
let objParagrafo = document.getElementById("parag");

//associando o objeto parágrafo ao evento onclick
objParagrafo.addEventListener("click", trocarCorDoTexto);

