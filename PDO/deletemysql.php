<?php

  $conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "darkside");

  $stmt= $conn->prepare("DELETE FROM TESTE WHERE IDUSER = :ID");


  $id = 41;

  $stmt->bindParam(":ID",$id);

  $stmt->execute();


  echo "<h3>Registro deletado com sucesso!</h3>";

 ?>
