<p><h4>Abrindo sessao do arq config.php</h4><?php
  require_once("../config.php");

  echo $_SESSION['nome'];
?>
<p><h4>Id de Sessao</h4><?php
  echo session_id();
?></p>
