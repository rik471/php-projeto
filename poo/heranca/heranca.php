<h1>Organizando Classes Em Heranças</h1><p><?php

  class Docs {
    private $num;

    public function getNum(){
      return $this->num;
    }
    public function setNum($num){
        $this->num = $num;
    }
  }

  class CPF extends Docs{

    function validar():bool
    {
//aqui se faz o algoritmo de validar
      $numCPF = $this->getNum();

      return true;

    }
  }
  $doc = new CPF();

  $doc->setNum("019436576-02");

  var_dump($doc->validar());
  echo "<br>". $doc->getNum();


?></p>
