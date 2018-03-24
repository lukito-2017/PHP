<?php
	session_start(); 
	require "conexao.php";
	
	if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {

		$id = $_SESSION['banco'];
		$sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
		}
		
	} else{
		header("Location: login.php");
		exit();
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Caixa Eletronico</title>
 </head>
 <body>
 	<h1>Banco XYZ</h1><br>
 	<a href="sair.php">Desconectar da conta</a><br><br>

 	<strong>Titular:</strong> <?php echo $dados['titular'] ?><br>
 	<strong>Agencia:</strong> <?php echo $dados['agencia']; ?><br>
 	<strong>Conta:</strong> <?php echo $dados['conta']; ?><br>
 	<strong>Saldo:</strong> <?php echo $dados['saldo'] ?>
 	<hr>
 	
 	<h3>Movimentação da conta</h3>
 	<a href="add-transacao.php">Adicionar Transacao</a><br><br>
 	<table border="1" width="400">
 		
 		<tr>
 			<th>Data</th>
 			<th>Valor</th>
 		</tr>

 		<?php 
 			$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id");
 			$sql->bindValue(":id", $id);
 			$sql->execute();

 			if ($sql->rowCount() > 0) {
 				foreach($sql = $sql->fetchAll() as $item){
 					?>
 					<tr>
 						<td><?php echo date("d/m/Y H:i", strtotime($item['data_operacao'])); ?></td>
 						<td>
 							<?php if($item['tipo'] = '0'): ?>
 								<font color="green"> R$ <?php echo ($item['valor']) ?></font>
 							<?php else: ?>
 								<font color="red"> -R$ <?php echo ($item['valor']) ?></font>
 							<?php endif; ?>
 						</td>
 					</tr>
 					<?php
 				}
 			}
 		 ?>


 	</table>

 </body>
 </html>