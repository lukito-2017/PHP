<?php 

/*
addslashes - Adiciona barras invertidas a uma string. É muito utilizado por questoes de segurança em qualquer dado recebido pelo usuário. Evita sqlinjection. 
*/

$sql = "SELECT *FROM posts WHERE autor = '$autor'";
$autor = addcslashes($_POST["autor"]);



 ?>