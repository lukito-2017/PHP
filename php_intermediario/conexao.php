<?php 
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch (Exception $e) {
		echo "Conexao falhou ". $e->getMessage();
	}

 ?>