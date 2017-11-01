<h1>Tabuada Completa</h1><p><?php

  class Tabuada_completa{

  public  function tabuada1($x, $i){
      for ($i=1; $i <=10 ; $i++) {
        echo "<h1>Tabuada do $i:</h1><br>";
        for ($x=1; $x <=10; $x++) {
          $resultado = $x * $i;
          echo "$x x $i = $resultado <br>";
        }
      }
      return ;
    }
  }

$tab = new Tabuada_completa();
echo $tab->tabuada1();
?></p>
