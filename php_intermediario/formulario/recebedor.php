<?php
	if(isset($_POST["email"] )&&  empty($_POST["email"]) == false){
		$email = $_POST["email"];
		echo "O email eh ".$email. " ";
		echo "Isso é demais!!!";
	}

 ?>