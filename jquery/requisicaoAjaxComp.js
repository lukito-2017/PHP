/**
 * ESTRUTURA COMPLETA PRA REQUISIÇÃO AJAX
 *
 * $.ajax({
 * 	type: 'POST',
 * 	url:'ajax.php',
 * 	data:txt,
 * 	success: function(resultado){
 * 		$('div').html("Resultado: "+resultado);
 * 	},
 * 	error: function(){
 * 		alert("Erro")
 * 	}
 * })
 * ESTRUTURA COMPLETA PARA REQUISIÇÃO AJAX COM JSON
 *  	$.ajax({
 * 	type: 'POST',
 * 	url:'ajax.php',
 * 	data:txt,
 * 	dataType: 'json'
 * 	success: function(resultado){
 * 		alert(json.nome);
 * 	},
 * 	error: function(){
 * 		alert("Erro")
 * 	}
 * })
 *
 */
$(function(){
	$('form').bind('submit', function(e){
		e.preventDefault();

		var txt = $(this).serialize();
		console.log(txt);

		$.ajax({
			type: 'GET',
			url: 'ajax.php',
			data:txt,
			success:function(resultado){
				$('div').html(resultado);
			},
			error:function(){
				alert("Algum erro aconteceu");
			}
		});
	});
});