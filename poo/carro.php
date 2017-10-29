<h2>Meu Objeto Carro</h2><p><?php

  class Car {
//meus atributos
    private $model;
    private $year;
    private $brand;
/*metodos && getters e setters*/
    public function getModel(){
      return $this->model;
    }

    public function setModel($model){
      $this->model = $model;
    }

    public function getYear(){
      return $this->year;
    }

    public function setYear($year){
      $this->year = $year;
    }

    public function getBrand(){
      return $this->brand;
    }

    public function setBrand($brand){
      $this->brand = $brand;
    }

    public function car_info(){
      return array(
        "Modelo"=>$this->getModel(),
        "Year"=>$this->getYear(),
        "Brand"=>$this->getBrand()
      );
    }/*fim_metodos*/
  }//fim_classe"

$uno = new Car();//objeto
//atribuindo valores ao obejto//
$uno->setModel("Novo Uno");
$uno->setYear("2013");
$uno->setBrand("Fiat");

print_r($uno->car_info());

?></p>
