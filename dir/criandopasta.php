<?php

$dirname = "images";

if (!is_dir($dirname)) {

  mkdir($dirname);
  echo "Diretório $dirname criado.</br>";

}else {

  rmdir($dirname);
  echo "Diretório $dirname já existe. Foi removido.";
  
}

?>
