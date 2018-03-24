$(function(){
	$('button').bind('click', function(){
		var altura = $('#altura').val();
		var peso = $('#peso').val();

		altura = altura.replace(',', '.');
		peso = peso.replace(',', '.');

		var resultado = peso / (altura * altura);
		$('#imc').html(resultado);

	});
});