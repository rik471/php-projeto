<?php

  $conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "darkside");

  $conn->beginTransaction();

  $stmt= $conn->prepare("INSERT INTO TESTE(USERLOGIN, USERPASS) VALUES(?, ?);");


  $login = "Ana";
  $password = "rickeana";

  $stmt->execute(array($login, $password));

  //$conn->rollback();

  $conn->commit();

  echo "<h3>LOGIN CADASTRADO COM SUCESSO!</h3>";

 ?>
