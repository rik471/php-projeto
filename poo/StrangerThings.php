<?php

interface Diretor{

  public function vidaDiretor($nomeDiretor);
  public function melhoresFilmes($filme);
  public function premios($premio);
}

abstract class StrangerThings implements Diretor {
  public $serie;
  public $nomeDireto;

  public function vidaDiretor($nomeDiretor)
  {
    echo "Os ".$this->nomeDiretor." são irmãos gêmeos e colocam na série ".$this->serie." tudo que influenciou suas vidas.<br>";
  }
  public function melhoresFilmes($serie)
  {
      echo "A série ". $this->serie . " é considerado a mais assistida em 2016.<br>";
  }
  public function premios($premio){
    echo $this->serie . "recebeu o premio de ".$premio." em 2016.<br>".$this->serie." foi criada pelos ". $this->nomeDiretor;
  }
}

  ?>
