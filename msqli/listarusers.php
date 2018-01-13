<?php

//conectando com o banco
$connect = new mysqli("127.0.0.1",
 "root", "darkside", "dbphp7");

 //verificando erros de conexao
if($connect->connect_error) {

  echo "Error ". $connect->connect_error;

}
//consulta no banco
$mostrarlinha = $connect->query("SELECT * FROM dbphp7.TESTE ORDER BY USERPASS");
//array temporario pra gerar no while
$dados = array();
//fecth assoc busca linhas
while ($linha = $mostrarlinha->fetch_assoc()) {
  //fara novo array com cada linha da consulta no banco
  array_push($dados, $linha);

}

echo json_encode($dados);
?>
