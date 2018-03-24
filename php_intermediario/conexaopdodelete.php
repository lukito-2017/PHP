<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpassword = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpassword); /*Objeto PDO criado com sucesso*/

	$sql = "DELETE FROM usuarios WHERE id=8";
	$pdo->query($sql);
	echo "Usuario removido com sucesso";

}catch (PDOException $e) {
	echo "Conexao falhou". $e->getMesssage();
}
?>