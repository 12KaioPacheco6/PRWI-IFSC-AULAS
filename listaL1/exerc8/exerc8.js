let objParag1 = document.getElementById("parag1");
let objParag2 = document.getElementById("parag2");
let objLista  = document.getElementById('lista');

let textoDoParag1 = objParag1.innerHTML;
let textoDoParag2 = objParag2.innerHTML;

let textoFinal = "<li>" + textoDoParag1 + "</li><li>" + textoDoParag2 + "</li>";

objLista.innerHTML = textoFinal;