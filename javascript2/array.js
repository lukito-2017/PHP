/*
lista.indexOf() - retorna a posição do parâmetro que foi  especificado.
lista.join() - transforma todos os valores do array em uma string. deve ser usado algum item para separar o valor
lista.lentgh - retorna a qt de itens no array
lista.pop() - remove o ultimo item da lista
lista.shift() - remove o primeiro item da lista
lista.push() - adiciona um item na lista
*/

var lista = ["Arroz", "Feijao", "Macarrao", "Leite"];

if(lista.indexOf("Feijao") > -1){
	document.write(lista);
	document.write("<br /><br />");
	var posicao = lista.indexOf("Feijao");
	lista.splice(1, 1);
	document.write(lista);"<br />"

}
