<?php require 'pages/header.php' ?>
	<div class="container">
	<h1>Cadastre-se</h1>
	<?php require 'classes/usuarios.class.php' ;
	$usuario = new Usuarios();

		if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = $_POST['senha'];
			$telefone = addslashes($_POST['telefone']);

			if(!empty($nome) && !empty($email) && !empty($senha)){
				if($usuario->cadastrar($nome, $email, $senha, $telefone)){
					?>
					<div class="alert alert-success">
						<strong>Usuário cadastrado com sucesso!</strong><a href="login.php" class="alert-link">Faça o login agora.</a>
					</div>
					<?php
				}else{
					?>
					<div class="alert alert-warning">
						<strong>Já existe um usuário cadastrado com esse email!</strong><a href="login.php" class="alert-link">Faça o login agora.</a>
					</div>
					<?php
				}
			}else{
				?>
					<div class="alert alert-warning">
						Preencha todos os campos!
					</div>
				<?php
			}
		}
	?>
		<form method="POST">
			<div class="form-group">
				<label for="nome">Nome:</label>
    				<input type="text" name="nome" class="form-control" id="nome">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
    				<input type="text" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
    				<input type="password" name="senha" class="form-control" id="senha">
			</div>
			<div class="form-group">
				<label for="telefone">Telefone:</label>
    				<input type="text" name="telefone" class="form-control" id="telefone">
			</div>
			<input type="submit" value="Cadastrar" class="btn btn-default">
		</form>
	</div>


<?php require 'pages/footer.php' ?>