function trocarCor(evento)
 {
 //nesta modificação, vamos alterar esta função para que, no primeiro clique do botão, o JavaScript troque a cor original da fonte para uma nova cor. No segundo clique, o JavaScript deve retornar à cor original. Para isso, devemos salvar a cor padrão do texto do botão em uma variável
 let corOriginal = this.style.color;

 if(corOriginal == "green")
   {
   this.style.color = "red";
   }
 else
  {
  this.style.color = "green";
  }

 //desativar o evento click sobre o botão, evitando o recarregamento da página
 evento.preventDefault(); //impede o evento padrão de ser disparado
 }

let objBotao = document.getElementById('botao');
objBotao.addEventListener("click", trocarCor);


