function alterarTexto( ){
      var texto = document.getElementById("artigo");
      var novoArtigo  =  prompt("Escreva o seu novo texto");

      texto.innerHTML = novoArtigo;
}