/*
onchange - ao mudar de opção dispara um evento
onfocus - quando o campo esta focado é disparado uma ação
onblur - quando o cursor estava em determinado campo e saiu(desfocado)
onsubmit - quando o formulario é enviado
 */

function mudaOpcao(objeto){
	console.log("A cidade escolhida eh: "+objeto.value);
}
function campoFocado(){
	console.log("campo focado");
}

dt = new Date();
dt.getHours();
document.write(dt.getHours());