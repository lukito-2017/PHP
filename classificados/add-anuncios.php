<?php require 'pages/header.php' ?>
<?php
	if(empty($_SESSION['cLogin'])){
		?>
		<script type="text/javascript">window.location.href="./";</script>
		<?php
		exit;
	}
 ?>
 <?php
 	if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
 		require 'classes/anuncios.class.php';
 		$a = new Anuncios();

 		$categoria = addslashes($_POST['categoria']);
 		$titulo = addslashes($_POST['titulo']);
 		$valor = addslashes($_POST['valor']);
 		$descricao = addslashes($_POST['descricao']);
 		$estado = addslashes($_POST['estado']);

 		$editar = $a->editarAnuncio($categoria, $titulo, $valor, $descricao, $estado);

 		?>
			<div class="alert alert-success">
				Anúncio adicionado com sucesso!
			</div>
 		<?php
 	}
  ?>
 <div class="container">
	<h1>Adicionar Anúncio</h1>
	<form method="POST">
		<div class="form-group">
			<label for="categoria">Categoria:</label>
    			<select name="categoria" id="categoria" class="form-control" id="categoria">
    				<?php
    					require 'classes/categorias.class.php';
    					$c =  new Categorias();
    					$categoria = $c->listarCategorias();
    					foreach($categoria as $cat): ?>
						<option value="<?php echo $cat['id']; ?>"><?php echo $cat['nome']; ?></option>
    					<?php endforeach; ?>
    			</select>
		</div>
		<div class="form-group" enctype="multipart/form-data">
			<label for="titulo">Titulo:</label>
    			<input type="text" name="titulo" class="form-control" id="titulo">
		</div>
		<div class="form-group">
			<label for="valor">Valor:</label>
    			<input type="text" name="valor" class="form-control" id="valor">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição:</label>
    			<textarea name="descricao" id="descricao" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado de Conservação:</label>
			<select name="estado" class="form-control" id="estado">
    				<option value="0">Ruim</option>
    				<option value="1">Bom</option>
    				<option value="2">Ótimo</option>
    			</select>
		</div>
		<input type="submit" value="Adicionar" class="btn btn-default">
	</form>

</div>
<?php require 'pages/footer.php' ?>