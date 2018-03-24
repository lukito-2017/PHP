<?php 
	session_start();
	require "conexao.php";

	if (isset($_POST['email']) && empty($_POST['email']) == false) {
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		try {
			$sql = $pdo->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

			if($sql->rowCount() > 0){
				$dado = $sql->fetch();
				$_SESSION['id'] = $dado['id'];

				header("Location: area_restrita.php");
			}

		} catch (PDOException $e) {
			echo "Conexao Falhou".$e->getMessage();
		}
	}


 ?>
<form method="POST">
  Email:<br>
  <input type="text" name="email"><br><br>
  Senha:<br>
  <input type="password" name="senha"><br><br>
  <input type="submit" value="Acessar">

</form>