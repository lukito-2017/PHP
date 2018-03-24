<?php
	require 'pages/header.php';
?>
<?php
	if(empty($_SESSION['cLogin'])){
		?>
		<script type="text/javascript">window.location.href="./";</script>
		<?php
		exit;
	}
	require 'classes/anuncios.class.php';
 	$a = new Anuncios();
 ?>
 <?php
 	if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
 		$categoria = addslashes($_POST['categoria']);
 		$titulo = addslashes($_POST['titulo']);
 		$valor = addslashes($_POST['valor']);
 		$descricao = addslashes($_POST['descricao']);
 		$estado = addslashes($_POST['estado']);

 		if(isset($_FILES['fotos'])){
 			$fotos = $_FILES['fotos'];
 		}else{
 			$fotos = array();
 		}

 		$a->updateAnuncio($categoria, $titulo, $valor, $descricao, $estado, $fotos, $_GET['id']);
		?>
			<div class="alert alert-success">
				Anúncio editado com sucesso!
			</div>
 		<?php
 	}

 	if(isset($_GET['id']) && !empty($_GET['id'])){
 		$info= $a->obterAnuncio($_GET['id']);
 	}else{
 		?>
		<script type="text/javascript">window.location.href="./";</script>
		<?php
		exit;
 	}

  ?>
 <div class="container">
	<h1>Editar Anúncio</h1>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="categoria">Categoria:</label>
    			<select name="categoria" id="categoria" class="form-control" id="categoria">
    				<?php
    					require 'classes/categorias.class.php';
    					$c =  new Categorias();
    					$categoria = $c->listarCategorias();
    					foreach($categoria as $cat): ?>
						<option value="<?php echo $cat['id']; ?>" <?php echo ($info['id_categoria'] == $cat['id'])? "selected=selected":" " ?>><?php echo $cat['nome']; ?></option>
    					<?php endforeach; ?>
    			</select>
		</div>
		<div class="form-group">
			<label for="titulo">Titulo:</label>
    			<input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $info['titulo']; ?>">
		</div>
		<div class="form-group">
			<label for="valor">Valor:</label>
    			<input type="text" name="valor" class="form-control" id="valor" value="<?php echo $info['valor']; ?>">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição:</label>
    			<textarea name="descricao" id="descricao" class="form-control"><?php echo $info['descricao']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado de Conservação:</label>
			<select name="estado" class="form-control" id="estado">
    				<option value="0" <?php echo ($info['estado'] == '0')? "selected=selected":" " ?>>Ruim</option>
    				<option value="1" <?php echo ($info['estado'] == '1')? "selected=selected":" " ?>>Bom</option>
    				<option value="2" <?php echo ($info['estado'] == '2')? "selected=selected":" " ?>>Ótimo</option>
    			</select>
		</div>
		<div class="form-group">
			<label for="add_foto">Adicionar Fotos:</label>
			<input type="file" name="fotos[]" multiple><br>

			<div class="panel panel-default">
				<div class="panel-heading">Fotos do Anúncio</div>
				<div class="panel-body"></div>
			</div>
		</div>
		<input type="submit" value="Alterar" class="btn btn-default">
	</form>

</div>
<?php require 'pages/footer.php' ?>