/**
 * hide - efeito desaparecer (parametro slow, fast)
 * show - efeito aparecer (parametro slow, fast)
 * o toggle é utilizado tando para aparecer como para desaparecer
 * fadeOut - efeito que deparece de forma opaca
 * fadeIn - efeito que aparece de forma opaca
 * fadeToggle - efeito que aparece e desaparece
 * slideUp - desaparece para cima.
 * slideDown - aparece para baixo.
 * slideToggle - desaparece para baixo e aparece para cima
 * animate: $('div').animate({
 * 		'border-radius':80
 * });
 */

$('.botao').bind('click', function(){
	$('.div').animate({
		'border-radius':80
	}, 500);
})

