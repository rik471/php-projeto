<?php
  session_start();

  $_SESSION["nome"] = "Rick";
  echo "ID de Sessão: ". session_id() . "<br>";
  ?>
