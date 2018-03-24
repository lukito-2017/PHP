<?php 
/*
dois modos de criptografia: md5 e base64
md5 muito utilizado pra criptografar senhas de usuarios
base64encode - codifica
base64decode - decodifica
*/

$senha = "sou18pro";
$senhaCriptografada = md5($senha);

echo $senha."<br>";
echo $senhaCriptografada;



 ?>