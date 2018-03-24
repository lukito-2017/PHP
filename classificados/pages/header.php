<?php require 'config.php'; ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
	<title>Classificados online! - Tudo que você procura esta aqui.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/script.js" type="text/javascript"></script>
</head>
<body>
	<nav class="nav navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-head">
				<a class="navbar-brand" href="./">Classificados</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
							<?php
								require 'classes/usuarios.class.php';
								$u = new Usuarios();
							?>
						<li><a href="#">Ola! <?php echo $u->nomeUsuario(); ?></a>
						<li><a href="meus-anuncios.php">Meus Anúncios</a></li>
						<li><a href="sair.php">Sair</a></li>
					<?php else: ?>
						<li><a href="cadastre-se.php">Cadastre-se</a></li>
						<li><a href="login.php">Login</a></li>
					<?php endif ?>
				</ul>
		</div>
	</nav>
