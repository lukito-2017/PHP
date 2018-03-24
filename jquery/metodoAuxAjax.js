/**METODOS AUXILIARES DE REQUISIÇÃO
 * load - carrega dados um arquivos externo.
 * post e get também fazem requisições
 * serializa - formata o texto para ser enviado
 *
 * 	$get.("arquivoExterno.html", function(t){
 * 		$('div').html(t);
 * 	});
 *
 * 	$('.botao').bind('click', function(){
		$('.div').load("arquivoExterno.html");
	})
 */

$('.botao').bind('click', function(){
	$('.div').load("arquivoExterno.html");
})

$('#form').bind('submit', function(e){
	e.preventDefault();

	var txt = $(this).serialize();
	console.log(txt);
})