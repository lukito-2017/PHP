<!--
- colocando a propriedade "multiple" no input type file o formulário suporta vários arquivos
- o "name" do input type file deve esta assim: name="arquivo[]"
-->

<?php 

	if (isset($_FILES['arquivo'])) {
		if (count($_FILES['arquivo']['tmp_name']) > 0) {
			for($i = 0;$i < count($_FILES['arquivo']['tmp_name']); $i++){
				$nomedoarquivo = md5($_FILES['arquivo']['name'][$i].rand(0, 999)).'.jpg';
				move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], 'arquivos/'.$nomedoarquivo);
			}
		}
	}
	
 ?>


<form method="POST" enctype="multipart/form-data">

	<input type="file" name="arquivo[]" multiple="">
	<input type="submit" name="Enviar">
	
</form>