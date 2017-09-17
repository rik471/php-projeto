
<p>Ex 01</br><?php
  $nome = "Pablo";
  echo "<b>Hello World</b>, Malparidos!</br>";
  var_dump($nome);
  /*mostrandotipo de var*/
?>
</p>

<p>Ex 02</br><?php
  //Apagando variavel
  $sobrenome = "Escobar";
  $nomeCompleto = $nome . " " . $sobrenome;/*Concatenação*/
  $nome1 = "teste";
  echo $nome1;
  echo "</br>";
  unset($nome);
  if (isset($nome)) {
    /*isset ignifica "se existir"*/
    echo $nome;
  }
  echo $nomeCompleto;

 ?></P>
<p>Ex 03 <br><?php
  /*tipos de dados*/
  $nome = "Rick";
  $site = "www.facebook.com";
  $ano = "1997";
  $salario = "5500.99";
  $bloqueado = false;
  /////////ARRAY=VETORES/////////////
  $frutas = array('abacaxi', 'laranja', 'manga' );
  echo "$frutas[1]</br>";

  //objeto

  $nasc = new DateTime();
  echo "</br>". $nasc-> format('y-m-d H:i:s');
  //var_dump($nasc);
  ///abrindo arq///
  $arq = fopen("mrrobot/pass.txt", "r");
  echo "$arq";
  /*VAR nulo*/$nulo = NULL;
 ?></p>

 <p>Ex 04 <br><?php
  //array super-globais
    $nome = (int)$_GET["a"];//pega informação url
    echo "$nome";

    $ip = $_SERVER["REMOTE_ADDR"];
    echo "</br>$ip";
  ?></p>
