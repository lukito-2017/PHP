<?php
	if(isset($_POST['email']) && empty($_POST['senha'] ) == false){
		if(isset($_POST['senha']) && empty($_POST['senha']) == false){
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			echo "o email eh ".$email." e a senha eh ".$senha;
		}
	}

 ?>
<hr>
<form  method="POST">
	Email:<br>
	<input type="text" name="email"><br><br>
	Senha:<br>
	<input type="password" name="senha"><br><br>
	<input type="submit" value="Enviar Dados">
</form>