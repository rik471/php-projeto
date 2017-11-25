<?php
    spl_autoload_register(function($nameClass){//solicitando arquivo da classe

        $dirClass = "class";//pasta da classe

        $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php");
        //separando por diretorio e pegando a classe de cada pasta e subpasta

        if(file_exists($filename)) {

          require_once($filename);
        }else {
          echo "Arquivo não encontrado.<br>Verifique se o nome do arquivo
          é o mesmo da classe...<br>";
        }

  });
 ?>
