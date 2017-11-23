<?php
    spl_autoload_register(function($nameClass){

        $dirClass = "class";//pasta da classe
        $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php";
        //separando por diretorio e pegando a classe de cada pasta e subpasta

        if(file_exists($filename)) {

          require_once($filename);
        }

  });
 ?>
