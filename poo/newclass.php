<h1>Criando Minha Primeira Classe</h1><p><?php


  class People {

    public $name;//atributo/caracteristica

    public function cantar(){//método

        return $this->name." Dead memories in my heaaart...";

    }

}

$rick = new People();
$rick->name = "Rick G.";
echo $rick->cantar();

?></p>
<h1>Meu POO</h1><p><?php

  class tabuada {

    public $num;//objeto a ser multiplicado

    public function multi(){//method

      for ($i=0; $i <= 10 ; $i++) {
        $result = $this->num * $i;
        echo $this->num." x $i = $result<br>";
      }

      return;
    }

  }

  $multi = new tabuada();
  $multi->num = 9;
  echo $multi->multi();
?></p>
