<?php 
	
	$arquivo = $_FILES['arquivo'];

	
	if (isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false) {
		move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$arquivo['name']);

		echo "Arquivo enviado com sucesso";
	}
 ?>
