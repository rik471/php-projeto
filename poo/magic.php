<h1>Metodo Mágico</h1><p><?php

class Endereco {

    private $endec;
    private $bairro;
    private $cidade;

    public function __construct($e, $b, $c){
      // __construct signifca metodo magico
      $this->endec = $e;
      $this->bairro = $b;
      $this->cidade= $c;
    }
    public function __destruct(){
      //DESTRUCT EXECUTA NO FINAL DA CLASSE
      //pode ser usado para destruir a classe ou
      //liberar espaço na memoria
      //ou para destruir variaveis
      var_dump("Destruido");
    }
    public function __toString(){
      //transforma e formata os atributos do objeto para string
      return $this->endec.", ".$this->bairro." - ".$this->cidade;
    }
}

  $myadress = new Endereco("Rua Jose Sanches
 Ferreira 161", "P. Bom Pastor", "Divinopolis");

  //var_dump($myadress);
  //unset($myadress);
  echo $myadress."<br>";
?></p>
