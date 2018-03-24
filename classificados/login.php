<?php require 'pages/header.php' ?>
	<div class="container">
	<h1>Login</h1>
	<?php require 'classes/usuarios.class.php' ;
	$usuario = new Usuarios();

		if(isset($_POST['email']) && !empty($_POST['senha'])){
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			if(!empty($email) && !empty($senha)){
				if($usuario->login($email, $senha)){
					?>
						<script type="text/javascript">
							window.location.href="./";
						</script>
					<?php
				}else{
					?>
					<div class="alert alert-danger">
						<strong>Usuário e/ou senha errados!</strong>
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
				<label for="email">Email:</label>
    				<input type="text" name="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
    				<input type="password" name="senha" class="form-control" id="senha">
			</div>
			<input type="submit" value="Fazer Login" class="btn btn-default">
		</form>
	</div>


<?php require 'pages/footer.php' ?>