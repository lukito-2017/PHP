<?php 

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpassword = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpassword); /*Objeto PDO criado com sucesso*/
	$sql = "SELECT *FROM usuarios";
	$sql = $pdo->query($sql); /*query - executa uma consulta sql*/

	if ($sql->rowCount() > 0) { /*rowCount - conta as linhas da tabela*/
		foreach ($sql->fetchAll() as $usuarios) { /*fetchAll - passa os dados de um consulta para um array*/
			echo $usuarios["nome"]." - ". $usuarios["email"]."<br>";
	}
	}else{
		echo "Usuario não cadastrado";
}

} catch (PDOException $e) {
	echo "Conexao falhou". $e->getMesssage();
}

?>