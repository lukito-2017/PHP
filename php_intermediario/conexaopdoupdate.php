<?php 

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpassword = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpassword); /*Objeto PDO criado com sucesso*/

	$sql = "UPDATE usuarios SET nome = 'Willia Raquel' WHERE nome='Gilvan Barbosa'";
	$sql = $pdo->query($sql);

	echo "Informação alterado com sucesso";

}catch (PDOException $e) {
	echo "Conexao falhou". $e->getMesssage();
}

?>