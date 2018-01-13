<p><h4>Testando json</h4><?php
  //decodando arq json

  $json = '[{"Death Metal":"Death"},{"Thrash Metal":"Pantera"}]';
  $data = json_decode($json, true);
  var_dump($data);
?></p>
