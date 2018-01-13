<h1>Validando CPF</h1><p><?php
  class Doc {

    private $num;

    public function getNum(){
      return $this->num;
    }

    public function setNum($num){
       $result = Doc::validarCPF($cpf);

       if($result === false){
         throw new Exception("CPF Inválido", 1);
       }

       $this->num = $num;
    }
    public static function validarCPF($cpf):bool
    {
        //verifica se num foi informado
          if(empty($cpf)) {
           return false;
       }
       //elimina possivel mascara
       $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
       $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

       //verifica se há 11 digitos informados
       if (strlen($cpf) != 11) {
           echo "length";
           return false;
           //Else verifica possiveis sequencias falsas
       }else if ($cpf == '00000000000' ||
           $cpf == '11111111111' ||
           $cpf == '22222222222' ||
           $cpf == '33333333333' ||
           $cpf == '44444444444' ||
           $cpf == '55555555555' ||
           $cpf == '66666666666' ||
           $cpf == '77777777777' ||
           $cpf == '88888888888' ||
           $cpf == '99999999999') {
           return false;
           //calcula os digitos para verificar
           //se é valido
        } else {

           for ($t = 9; $t < 11; $t++) {

               for ($d = 0, $c = 0; $c < $t; $c++) {
                   $d += $cpf{$c} * (($t + 1) - $c);
               }
               $d = ((10 * $d) % 11) % 10;
               if ($cpf{$c} != $d) {
                   return false;
               }
           }

           return true;
       }
    }
  }
  $cpf = new Doc();
  $cpf->setNum("01943657602");

  var_dump($cpf->getNum(num));
//  var_dump(Doc::validarCPF("01943657602"));
?></p>
