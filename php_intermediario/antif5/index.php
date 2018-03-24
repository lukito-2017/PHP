<?php
    if(isset($_POST['email'])){
      $email = $_POST['email'];

      file_put_contents("texto.txt", $email, FILE_APPEND);

      header("Location: index.php");
    }
 ?>

<form method="POST">
      Email:<br>
      <input type="text" name="email"><br><br>
      <input type="submit" value="Enviar">
</form>