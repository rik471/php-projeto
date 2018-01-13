<?php
    //conectando com o banco
    $connect = new mysqli("127.0.0.1",
     "root", "darkside", "dbphp7");

     //verificando erros de conexao
    if($connect->connect_error) {

      echo "Error ". $connect->connect_error;

    }
    //preparando para inserir valores
    $stmt = $connect->prepare("INSERT INTO TESTE(USERLOGIN, USERPASS) VALUES(?, ?)");

    //reconhecendo os ? do INSERT
    $stmt->bind_param("ss", $login, $pass);
    $login = "Raissa";
    $pass = "rairai";

    //inserindo no banco as alterações
    $stmt->execute();
?>
