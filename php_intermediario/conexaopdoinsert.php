<?php 

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpassword = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpassword); /*Objeto PDO criado com sucesso*/

	$nome = "Gilvan Barbosa";
	$email = "gilvanbarbosa@hotmail.com";
	$senha = md5(134679);
	
	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
	$sql = $pdo->query($sql);

}catch (PDOException $e) {
	echo "Conexao falhou". $e->getMesssage();
}

?>