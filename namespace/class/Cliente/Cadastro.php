<?php

namespace Cliente;//usando a classe generica cadastro da pasta raiz


class Cadastro extends \Cadastro
{

  public function rVenda(){

    echo "Sua venda foi registrada pro cliente  ".$this->getNome();
  }
}


 ?>
