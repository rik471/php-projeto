<meta charset="utf-8">
<h1>Função 1</h1><p>
<?php
function sabre(){
    $sabre = "Zzzzuuuum";
    return "$sabre";
  }
  $frase = sabre();
  echo "$frase<br>";
  echo strlen($frase);
  echo "<br><br>";
?></p>
<h2>Função 2</h2><p>
<?php
  function salario(){
    $sal = 1500.00;
    return "$sal";
  }
  $sal = salario();
  echo "Daniel recebe o salario de $". number_format($sal, 2, ',', '') ." reais.<br>
  Já José recebe 3 vezes amais o salario de Daniel. <br>
  José então recebe $". number_format($sal * 3, 2, ',','') ." reais.<br>";
?></p>
