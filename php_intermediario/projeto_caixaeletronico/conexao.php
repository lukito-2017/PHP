<?php 
	$dsn = "mysql:dbname=projeto_caixaeletronico;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Conexao falhou ". $e->getMessage();
		exit();
	}

 ?>