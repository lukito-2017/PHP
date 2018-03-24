

<?php
/*
explode - retorna uma strig dividida em várias partes em um array
implode - Junta elementos de uma matriz em uma string
number_format - Formata um número com os milhares agrupados
str_replace - substitui uma string por outra.
strtolower - Converte uma string para minuscula.
strtoupper - Converte uma string para maiuscula. 
substr — Retorna uma parte de uma string
ucfirst — Converte para maiúscula o primeiro caractere de uma string
ucwords — Converte para maiúsculas o primeiro caractere de cada palavra
*/ 

#############EXPLODE################################################
$nome = "Lucas Emanuel Dantas Barbosa";
$palavra = explode(" ", $nome); //o "espaço" é o agente delimitador
print_r($palavra);

echo "<br>";
#############IMPLODE################################################
$texto = array("Contra", "o", "Calvinismo");
$titulo = implode(" ", $texto);
echo "O titulo eh: ".$titulo;
echo "<br>";
#############NUMBER_FORMAT##########################################
$x = number_format(849.66161, 2); #duas casas decimais foram escolhidas depois do ponto.
echo $x;
echo "<br>";
#############STR_REPLACE############################################
$frase = "O calvinismo eh uma doutrina biblica";
$fraseCorreta = str_replace("calvinismo", "Arminianismo", $frase);
echo $fraseCorreta;
echo "<br>";
############STRTOLOWER#############################################
echo strtolower("LUCAS EMANUEL"); /*transforma palavra em minúscula*/
echo"<br>";
############STRTOUPPER##############################################
echo strtoupper("minha vida eh do senhor"); /*transforma palavra em maiuscula*/
echo "<br>";
############SUBSTR###################################################
$artigo = "cristo";
$y = substr($artigo, 0, 3);
echo $y."<br>";
?>