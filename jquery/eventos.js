/**
 * click - evento de clique
 * mouseover - quando passar o mouse em cima do elemento
 * mouseout - quando tirar o mouse de cima do elemento
 */

$(function(){
	/*Aqui é uma forma de adicionar evento*/
	$('button').click(function(){
		alert("é um evento de clique");
	})

	$('button').mouseover(function(){
		$(this).addClass("mudaCor");
	})
	$('button').mouseout(function(){
		$(this).removeClass("mudaCor");
	})
	/*Outra forma de adicionar evento. é um dos mais usados*/
	$('button').on('click', function(){

	})
	/*Outra forma de adicionar evento. é um dos mais usados*/
	$('button').bind('click', function(){

	})
	/*Para remover um evento*/
	$('button').unbind('click');
	$('button').of('click');

})