<?php

	class Anuncios{

		public function listaAnuncios(){
			global $pdo;
			$array = array();
			$sql = $pdo->prepare("SELECT *, (select anuncios_imagens.url from anuncios_imagens
				where anuncios_imagens.id_anuncio = anuncios.id limit 1) as url FROM anuncios WHERE id_usuario = :id_usuario");
			$sql->bindValue(":id_usuario", $_SESSION['cLogin']);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
				return $array;
			}
		}

		public function adicionaAnuncio($categoria, $titulo, $valor, $descricao, $estado){
			global $pdo;
			$sql = $pdo->prepare("INSERT INTO anuncios SET id_usuario = :id_usuario, id_categoria = :id_categoria,
				titulo = :titulo, valor = :valor, descricao = :descricao, estado = :estado ");
			$sql->bindValue(":id_usuario", $_SESSION['cLogin']);
			$sql->bindValue(":id_categoria", $categoria);
			$sql->bindValue(":titulo", $titulo);
			$sql->bindValue(":valor", $valor);
			$sql->bindValue(":descricao", $descricao);
			$sql->bindValue(":estado", $estado);
			$sql->execute();

		}

		public function excluirAnuncio($id){
			global $pdo;

			$sql = $pdo->prepare("DELETE FROM anuncios_imagens WHERE id_anuncio = :id_anuncio");
			$sql->bindValue(":id_anuncio", $id);
			$sql->execute();

			$sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
			$sql->bindValue(":id", $id);
			$sql->execute();
		}

		public function obterAnuncio($id){
			global $pdo;
			$array = array();
			$sql = $pdo->prepare("SELECT * FROM anuncios WHERE id = :id" );
			$sql->bindValue(":id", $id);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function updateAnuncio($categoria, $titulo, $valor, $descricao, $estado, $fotos, $id){
			global $pdo;
			$sql = $pdo->prepare("UPDATE anuncios SET id_usuario = :id_usuario, id_categoria = :id_categoria,
				titulo = :titulo, valor = :valor, descricao = :descricao, estado = :estado WHERE Id = :id");
			$sql->bindValue(":id_usuario", $_SESSION['cLogin']);
			$sql->bindValue(":id_categoria", $categoria);
			$sql->bindValue(":titulo", $titulo);
			$sql->bindValue(":valor", $valor);
			$sql->bindValue(":descricao", $descricao);
			$sql->bindValue(":estado", $estado);
			$sql->bindValue(":id", $id);
			$sql->execute();

			if (count($fotos) > 0) {
				for ($i=0; $i < count($fotos['tmp_name']); $i++) {

					$tipo = $fotos['type'][$i];
					if(in_array($tipo, array('image/jpg', 'image/png'))){
						$tmpname = md5(time().rand(0, 9999)).'.jpg';
						move_uploaded_file($fotos['tmp_name'][$i], 'assets/images/anuncios/'.$tmpname);
						echo $fotos['tmp_name'][$i];
						exit;
						/*
						list($width_orig, $height_orig) = getimagesize('assets/images/anuncios/'.$tmpname);


						$ratio = $width_orig/$height_orig;

						$width = 500;
						$heigth = 500;

						if($width/$heigth > $ratio){
							$width = $heigth*$ratio;
						}else{
							$heigth = $width/$ratio;
						}

						$img = imagecreatetruecolor($width, $height);
						if($tipo == 'image/jpeg'){
							$origi = imagecreatefromjpeg('assets/images/anuncios/'.$tmpname);
						}elseif($tipo == 'image/png'){
							$origi = imagecreatefrompng('assets/images/anuncios/'.$tmpname);
						}

						imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $heigth, $width_orig, $height_orig);
						imagejpeg($img, 'assets/images/anuncios/'.$tmpname, 80);

						$sql = $pdo->prepare("INSERT INTO anuncios_imagens SET id_anuncio = :id_anuncio, url = :url");
						$sql->bindValue(":id_anuncio", $id);
						$sql->bindValue(":url", $tmpname);
						$sql->execute();
						*/
					}

				}


			}


		}
	}

 ?>