<?php 
	
	$nomes = array("Bonieky","Andre","Felipe","Lucas");

	foreach ($nomes as $alunos ) {
		echo "Aluno: ".$alunos. "</br>";
	}
	echo "</br>";
##################################################################################
	
	$lista = array(
		array("nome" => "Bonieky", "idade" => 52),
		array("nome" => "Joao", "idade" => 41),
		array("nome" => "Felipe", "idade" => 35),
		array("nome" => "Mateus", "idade" => 41),
		array("nome" => "Felix", "idade" => 25)
	);

	foreach ($lista as $usuarios) {
		echo $usuarios["nome"]."-".$usuarios["idade"]."<br>";
	}

	echo "<br>";
###################################################################################

	$cadastro = array(
		"nome" => "Bonieky",
		"idade" => 35,
		"estado" => "PB",
		"pais" => "Brasil"
	);

	foreach($cadastro as $chave => $dado){
		echo $chave."-".$dado."<br>";
	}
?>