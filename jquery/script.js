/**
 * AO USAR O JQUERY PRECISA DESSA ESTRUTURA BÁSICA
 * 	$(elemento).acao - dessa forma é executada uma ação que pode ser do jquery ou não
 *  	$.acao - dessa forma é executada uma ação interna do jquery
 *
 */

/*
código abaixo mostra como fazer para que o codigo só seja executado
quanto a página for carregada
 */
$(document).ready(function(){
	alert("Ola, tudo bem?");
})

/*pode usar assum tambem*/
$(function(){
	alert("Que magnifico heim");
})

/*Evita conflito com outras bibliotecas:
var $j = jQuery.noConflict(); ---o j será usado no lugar do $
pode usar o código nativamente:
jQuery(document.ready(function(){

})

*/