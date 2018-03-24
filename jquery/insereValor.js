$(function(){
	/*Insere um texto dentro de uma div usando .html
	closest - procura o parent definido no paramento
	parent - procura o parente acima
	find - procura o parente abaixo
	addClass - adiciona uma classe a determinado elemento
	removeClass - Remove uma classe de determinado elemento
	hasClass - retorna true ou false ao buscar determinada classe

	Para trabalhar com estilização usa-se a estrutura:
	$('h1').css("color", "#FFF");

	para gardar dados em um deterinado elemento usa
	a função data.
	$('h1').data("idade", "25");

	*/
	$('#sidebar').html('Aqui segue o texto 2');

	$('#sidebar').append('Aqui segue o texto 3');

	$('#sidebar').after("<div>conteudo depois da dive sidebar</div>");

	/*adiciona depois*/
	$('ul').append('<li>texto3</li>');
	/*adiciona antes*/
	$('ul').prepend("<li>texto 0</li>");

})