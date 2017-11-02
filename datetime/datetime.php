<h1>Mostrando A  Data</h1><p><?php
  echo date("d/m/Y H:i:s")
?></p>
<h1>Usando Setlocale()</h1><p><?php

  setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

  echo ucwords(strftime("%A %B"));

?></p>
<h1>Classe DateTime</h1><p><?php
//manipulando data

  $dt = new DateTime();

  echo $dt->format("d/m/y H:i:s")."<br>";

  $period = new DateInterval("P20D");

  $dt -> add($period);

  echo $dt->format("d/m/y H:i:s");

?></p>
