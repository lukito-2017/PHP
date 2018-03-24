<?php 
	require "conexao.php";
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$comentario = $_POST['comentario'];

		$sql = "INSERT INTO comentario SET nome=:nome, email=:email, comentario=:comentario, data_comentario= NOW()";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":comentario", $comentario);
		$sql->execute();
	}
 ?>


<fieldset>
	<form method="POST">
		Nome:<br>
		<input type="text" name="nome"><br><br>
		Email:<br>
		<input type="text" name="email"><br><br>
		Comentario:<br>
		<textarea name="comentario"> </textarea><br><br>
		
		<input type="submit" value="Enviar Mensagem"><br><br>

	</form>

</fieldset>

<br><br>

<?php 
	$sql = "SELECT * FROM comentario ORDER BY data_comentario DESC";
	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0){
		foreach($sql->fetchAll() as $comentario):
			?>
				<strong><?php echo $comentario['nome']." ";echo date("d:m:Y H:i:s", strtotime($comentario['data_comentario']));?></strong><br>
				<?php echo $comentario['comentario'];?><br>
				<hr>
			<?php
		endforeach;
	} else{
		echo "Não há mensagens";
	}

 ?>