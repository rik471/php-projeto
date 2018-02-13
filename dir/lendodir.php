<?php

//ler pasta
  $images = scandir("images");

  $dados = array();

  //foreach mostra informações de cada item na pasta
  foreach ($images as $key) {
    if (!in_array($key, array(".",".."))) {

      $filename = "images" . DIRECTORY_SEPARATOR . $key;

      $info = pathinfo($filename);

      $info["size"] = filesize($filename);

      $info["url"] = "http://localhost/php/dir/". $filename;

      array_push($dados, $info);

    }
  }

  echo json_encode($dados);

 ?>
