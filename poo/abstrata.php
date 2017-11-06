<h1>Abstrata</h1><p><?php

  interface Diretor{

    public function vidaDiretor($nomeDiretor);
    public function melhoresFilmes($filme);
    public function premios($premio);
  }

  abstract class StrangerThings implements Diretor {
    //uma classe abstrata assim como interface
    //nao pode ser instaciada numa variavel como objeto
    //é preciso criar outra classe nao abstrata para executar o objeto
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

  class Episodio1 extends StrangerThings {
    //classe nao abstrata para executar o objeto acima
    public function willthewise(){
      echo "Neste EP Will sente o monstro dentro do seu corpo.<br>";
    }
  }

  $obj = new Episodio1();
  $obj->willthewise();
