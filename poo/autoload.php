<?php
 function incluir($nomeClasse){

      if(file_exists($nomeClasse.".php")=== true)
      {

        //var_dump("$nomeClasse.php");
        require_once("$nomeClasse.php");

      }else {

        echo "<p>File not found</p>";

      }
  }
spl_autoload_register("incluir");

  $teste = new Episodio1();

  $teste->willthewise("Stranger Things");
?>
