<?php 
	
 ?>

<!--
enctype="multipart/form-data" -propriedade do formulário que implementa o envio de 
arquivos pelo formulário 
-->
<form method="POST" enctype="multipart/form-data" action="recebedor.php">
 	<input type="file" name="arquivo">
 	<input type="submit" value="Enviar">
</form>