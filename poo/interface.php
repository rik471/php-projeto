<h1>Interfaces</h1><p><?php

  interface Diretor{
    //interface que sao definidas os tipo de metodos e etc
    //todas as classes a seguir terao de ultilizar como predefinido na interface
    public function vidaDiretor($nomeDiretor);
    public function melhoresFilmes($filme);
    public function premios($premio);
  }

  class StrangerThings implements Diretor {
    //class que implementa de acordo com a interface
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
$obj = new StrangerThings();
$obj->serie = "Stranger Things";
$obj->nomeDiretor = "Irmãos Duffer";
$obj->vidaDiretor();
$obj->melhoresFilmes("Stranger Things");
$obj->premios("Melhor História Original");

 ?></p>
