function verificaNumero( ){
	var n1 = document.getElementById("n1").innerHTML;
	var n2 = document.getElementById("n2").value;

	if (n1 == n2){
		alert("O número é igual");
	}else{
		alert("O número não é igual");
	}

	resetar( );
}

function resetar( ){
	document.getElementById("n2").value = "";
	var r = Math.floor(Math.random( ) * 100);
	document.getElementById("n1").innerHTML =  r;

}