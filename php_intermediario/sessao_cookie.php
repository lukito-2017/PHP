<?php
/*
session_start guarda informações do usuarios no servidor. Quando o usuario sai da sessão ele tem que criar uma nova sessão
setcookie — Envia um cookie. Define um tempo de vida
*/
session_start(); /*sessão criada*/

$_SESSION["teste"] = "Lucas Emanuel";
echo "Sessão foi feita";

setcookie("nomeCookie", "informacao",time() + 3600); /*variavel gloval é $_COOKIE[]*/

 ?>