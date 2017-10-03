<html lang="pt-br"
<h4>Arrays</h4><?php

  $fruta = array('melancia','limao','abacate');
  print_r($fruta); //print_r exibe arrays
 ?>
<p><h4>Vetores de arrays</h4><?php
//riando dimensoes com vetor
  $rock[0][0] = "Death Metal";
  $rock[0][1] = "Thrash Metal";
  $rock[0][2] = "Metal Classico";
  $rock[0][3] = "Heavy metal";

  $rock[1][0] = "Death";
  $rock[1][1] = "Pantera";
  $rock[1][2] = "Épica";
  $rock[1][1] = "Disturbed";

  echo $rock [1][2]."<br>";
  echo end($rock[0]);
 ?></p>
<p><h4>Adicionando Arrays</h4><?php
//como add arrays
  $band = array();
  array_push($band, array('Death Metal' =>'Death' ));
  array_push($band, array('Thrash Metal' =>'Pantera' ));
  print_r($band);
 ?></p>
<p><h4>JSON</h4><?php
  echo json_encode($band);
?></p>
<p><h4>Constantes</h4><?php
  define("Linguagem","PT-BR");
  echo Linguagem;
?></p>
<p><h4>Constante com array</h4><?php
define("database", ['Ip: 127.0.0.1',
  'Login: MrRobot','Pass: 050797']);
  print_r (database);
?></p>
<p><h4>Constante com array</h4><?php
  echo PHP_VERSION;
  echo "<br>";
  echo DIRECTORY_SEPARATOR;
?></p>
