<?php

  session_start();

//depois de autentica login e senha, reinicie a sessao
  session_destroy();

  session_start();

  session_regenerate_id();

  echo session_id();

 ?>
