<?php

  $conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "darkside");

  $stmt= $conn->prepare("INSERT INTO TESTE(USERLOGIN, USERPASS) VALUES(:LOGIN, :PASSWORD)");
    //nao passar direto login, dois pontos evita sqlinjection

  $login = "jose";
  $password = "123456";

  $stmt->bindParam(":LOGIN", $login);
  $stmt->bindParam(":PASSWORD", $password);

  $stmt->execute();


  echo "<h3>LOGIN CADASTRADO COM SUCESSO!</h3>";

 ?>
