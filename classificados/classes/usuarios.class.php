<?php

class Usuarios {

	public function cadastrar($nome, $email, $senha, $telefone){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0){
			$sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":telefone", $telefone);
			$sql->execute();

			return true;
		}else{
			return false;
		}
	}
	public function login($email, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			$_SESSION['cLogin'] = $dados['id'];
			return true;
		}else{
			return false;
		}
	}
	public function nomeUsuario(){
		global $pdo;
		if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])){
			$id = $_SESSION['cLogin'];

			$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
			$sql->bindValue(":id", $id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$nomeUser = $sql->fetch();
				return $nomeUser['nome'];
			}
		}
	}

 }

 ?>
