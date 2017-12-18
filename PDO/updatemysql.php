<?php

  $conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "darkside");

  $conn->beginTransaction();

  $stmt= $conn->prepare("UPDATE TESTE SET USERLOGIN = ?, USERPASS = ? WHERE IDUSER = ?");


  $login = "Ana";
  $password = "onca";
  $id = 8;

  $stmt->execute(array($login,$password,$id));

  $conn->commit();

  echo "<h3>LOGIN ALTERADO COM SUCESSO!</h3>";

 ?>
