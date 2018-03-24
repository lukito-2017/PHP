<?php 
/*
array_keys — Retorna todas as chaves ou uma parte das chaves de um array
array_values — Retorna todos os valores de um array
array_pop — Extrai um elemento do final do array
array_shift — Retira o primeiro elemento de um array
asort — Ordena um array mantendo a associação entre índices e valores
arsort — Ordena um array em ordem descrescente mantendo a associação entre índices e valores
count — Conta o número de elementos de uma variável, ou propriedades de um objeto
in_array — Checa se um valor existe em um array
*/
#########################################
$cores = array(
	"Teto" =>"Vermelho", 
	"Parede" =>"Azul", 
	"Piso" =>"Branco", 
	"Banheiro" => "Amarelo"
);

$chaves = array_keys($cores);
print_r($chaves);
echo "<br>";
########################################
$valores = array(
	"Teto" =>"Vermelho", 
	"Parede" =>"Azul", 
	"Piso" =>"Branco", 
	"Banheiro" => "Amarelo"
);

$valor = array_values($valores);
print_r($valor);
echo "<br>";
########################################
$x = array(
	"Teto" =>"Vermelho", 
	"Parede" =>"Azul", 
	"Piso" =>"Branco", 
	"Banheiro" => "Amarelo"
);

array_pop($x);
print_r($x);
echo "<br>";
######################################
$y = array(
	"Teto" =>"Vermelho", 
	"Parede" =>"Azul", 
	"Piso" =>"Branco", 
	"Banheiro" => "Amarelo"
);

array_shift($y);
print_r($y);
echo "<br>";
asort($y);//ordena os valores de um array de forma alfabética. 
print_r($y);
echo count($y); // retorna quantidade de elementos dentro de um array
if(in_array("Azul", $y)){
	echo "tem a cor especificada";
}
?>