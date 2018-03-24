/**
 * [Caracteristacas dos Animais]
 * aqui é demonstrado o esquema de uma classe e seus atributos.
 */
function Animal(){
	this.raca = "Pitbull";
	this.nome = "rafa";
	this.idade = 2;
	this.peso = 10;

	/**
	 * [fazeerXixi description]
	 * @return {[type]} [description]
	 * aqui é demonstrado a declaração de um método no java script
	 */
	this.fazerXixi = function(){
		console.log("Xixxiiiiiiiiii.....");
	}
	this.aumentaPeso = function(p){
		this.peso = this.peso + p;
	}
}


/**
 * [cachorro description]
 * @type {Animal}
 * aqui é demonstrado a instância de uma classe (Objeto);
 */
var cachorro = new Animal();
var vaca= new Animal();