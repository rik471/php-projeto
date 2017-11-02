
<p><h4>Adicionando Arrays</h4><?php
//como add arrays
  $band = array();
  array_push($band, array('Death Metal' =>'Death' ));
  array_push($band, array('Thrash Metal' =>'Pantera' ));

  print_r($band); // ?></p>
<p><h4>JSON</h4><?php
//encodando arq json
  echo json_encode($band);
