/**
 * submit - evento submit do formulario
 * select - evento select do formulario (quando o texto esta selecionado)
 * focus - evento de focus - quando o elemento esta focado
 * blur - evento quando o elemento estiver desfocado.
 * change - evento de <selected>
 * keydow - evento quando uma tecla é pressionada
 * keyup - quando uma tecla deixa de ser pressionada
 * mousedown - evento quando o botao do mouse é apertado
 * mouseup - evento quando solta o  botao do mouse
 * mousemove - ao mover o ponteiro do mouse dentro da area de um determinado elemento
 * mouseover - quando o ponteiro do mouse esta em cima do elemento.
 * mouseout - quando o ponteiro do mouse esta em cima do elemento e sai
 * click - quando solta o click(igual o mouseover)
 * dblclick - quando da dois cliques em um elemento
 */

/*chat simples*/
$('#nome').bind('keyup', function(e){
	if(e.keyCode == 13){
		var txt = $(this).val();
		console.log(txt);
		$(this).val('');
	}
})