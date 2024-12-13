function acrescentarTexto()
 {
 let objCabec = document.getElementById('cabec');
 let objParag = document.getElementById('parag');

 //salvando o texto que já existe no cabeçalho h1 antes de inserirmos mais texto no innerHTML
 let textoDoCabec = objCabec.innerHTML;
 let textoDoParag = objParag.innerHTML;

 textoDoCabec = textoDoCabec + " Este texto é acrescentado dinamicamente pelo JavaScript";
 textoDoParag = textoDoParag + " Este texto é acrescentado dinamicamente pelo JavaScript";

 objCabec.innerHTML = textoDoCabec;
 objParag.innerHTML = textoDoParag;
 }

let objBotao = document.getElementById("botao");
objBotao.addEventListener("click", acrescentarTexto);