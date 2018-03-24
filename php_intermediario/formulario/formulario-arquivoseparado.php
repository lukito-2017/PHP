<?php
	include "recebedor.php";
 ?>
<form method="POST" >
  	Email:<br>
  	<input type="text" name="email">
  	<input type="submit" value="Pode enviar">
</form>


/*Definindo o arquivo dentro do form com a tag "action" é chamada outra página com a execução do código*/
/*Quando se usa a função "include" ele executa o código em outra página mas o resultado aparece na atual. Se acontecer algum
erro no código ele continua a execução*/
/*O "require" faz a mesma coisa que o "include" só que se der algum erro no código ele para toda a aplicação.*/
/*O require_once só chama uma vez.*/