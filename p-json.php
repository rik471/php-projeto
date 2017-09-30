
<p><h4>Adicionando Arrays</h4><?php
//como add arrays
  $band = array();
  array_push($band, array('Death Metal' =>'Death' ));
  array_push($band, array('Thrash Metal' =>'Pantera' ));
int_r($band);); // ?></p>
<p><h4>JSON</h4><?php
//encodando arq json
  echo json_encode($band);
  echo "<br>";

  $json = "[{"Death Metal":"Death"},{"Thrash Metal":"Pantera"}]";
  $json_d = json_decode($json, true);
  print_r($json);
?></p>
