function trocarCor()
 {
 this.style.color = "red";
 }

function restaurarCor()
 {
 this.style.color = "#0B6121";
 }

let objParag = document.getElementById('parag');
objParag.addEventListener('mouseover', trocarCor);
objParag.addEventListener("mouseout", restaurarCor)

