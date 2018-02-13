<p><h4>Id de Sessao</h4><?php
  //regenerate_id regenera um novo id a cada sesssao aberta
  require_once("../config.php");
  session_regenerate_id();
  echo session_id();
  echo "<br>";
  var_dump($_SESSION);
?></p>
