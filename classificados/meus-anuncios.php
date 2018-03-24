<?php require 'pages/header.php' ?>
<?php
	if(empty($_SESSION['cLogin'])){
		?>
		<script type="text/javascript">window.location.href="./";</script>
		<?php
		exit;
	}
 ?>
<div class="container">
<h1>Meus Anúncios</h1>
	<a href="add-anuncios.php" class="btn btn-default">Adicionar Anúncio</a>
	<table class="table table-striped">
	<thead>
		<tr>
			<th>imagem</th>
			<th>Titulo</th>
			<th>Valor</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php
			require 'classes/anuncios.class.php';
			$a = new Anuncios();
			$anuncios = $a->listaAnuncios();
			foreach($anuncios as $dado): ?>
				<tr>
					<td>
						<?php if(!empty($dado['url'])):?>
							<img src="assets/images/anuncios/<?php echo $dado['url']; ?>" border="0">
						<?php else: ?>
							<img src="assets/images/anuncios/default.jpg" height="60" border="0">
						<?php endif ?>
						</td>
					<td><?php echo $dado['titulo']; ?></td>
					<td><?php echo number_format($dado['valor'], 2); ?></td>
					<td>
						<a href="editar-anuncio.php?id=<?php echo $dado['id']; ?>" class="btn btn-success">Editar</a>
						<a href="excluir-anuncio.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger">Excluir</a>
					</td>
				</tr>
			<?php endforeach; ?>
	</tbody>

	</table>

</div>

<?php require 'pages/footer.php' ?>