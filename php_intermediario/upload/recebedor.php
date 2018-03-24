<?php
	/*
	tmp_name = caminho da pasta temporaria
	move_uploaded_file = move o arquivo para a pasta no servidor
	$_FILES[] = variavel global dos arquivos anexados via formulário
	 */
	$arquivo = $_FILES['arquivo'];

	if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){
		$nomeArquivo = md5(time().rand(0, 999)).'.jpg';
		move_uploaded_file($arquivo['tmp_name'], 'images/'.$nomeArquivo);

		?>
			<script type="text/javascript">
				alert("Arquivo enviado com sucesso!");
				window.location.href="./";
			</script>
		<?php

	}

 ?>