/*
onkeydown - quando clicla na tecla. é passado o parâmetro "event" na função para sabler qual tecla foi apertada.
onkeyup - ao soltar a tecla dispara um evento
onkeypress - quando botao fica pressionado, dispara um evento

 */
function clicouTecla(event){
	console.log("Clicou na tecla "+event.keyCode);
}