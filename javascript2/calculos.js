function somar(){
	var n1 = parseInt(document.getElementById("n1").value);
	var n2 = parseInt(document.getElementById("n2").value);

	var resultado = n1 + n2;
	alert("O resultado eh "+resultado);
	window.location.href = "calculos.html";
}
function multiplicar(){
	var n1 = parseInt(document.getElementById("n1").value);
	var n2 = parseInt(document.getElementById("n2").value);

	var resultado = n1 * n2;
	alert("O resultado eh: "+resultado);
	window.location.href = "calculos.html";
}
function subtrair(){
	var n1 = parseInt(document.getElementById("n1").value);
	var n2 = parseInt(document.getElementById("n2").value);

	var resultado = n1 - n2;
	alert("O resultado eh "+resultado);
	window.location.href="calculos.html";
}
function dividir(){
	var n1 = parseInt(document.getElementById("n1").value);
	var n2 = parseInt(document.getElementById("n2").value);

	var resultado = n1 / n2;
	alert("O resultado eh "+resultado);
	window.location.href="calculos.html";

}


