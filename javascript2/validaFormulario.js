function validar(){
	var numero = document.getElementById("n1").value;

	if(numero.length > 2){
		alert("O numero digitado tem mais do que dois algarismos");
		window.location.href = "validaFormulario.html";
		return false;
	}else{
		alert("Parabens, digitou um numero com dois algarismo e o numero eh "+numero);
		return true;
	}
}