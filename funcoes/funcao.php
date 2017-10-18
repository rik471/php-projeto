<meta charset="utf-8">
<?php
  require_once("../config.php");
?>
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
<h3>Função com Paramêtro</h3><p><?php
  function starwars($x, $y){
    $x += $y;
    return "$x";
  }
  $star = starwars(3, 2);
  echo "3 + 2 = $star<br>";

?>
</p><h1>Argumentos</h1><p><?php
// da echo nos argumentos da função
  function ola($tex){
    $arg = func_get_args();
    return $arg;
  }
  var_dump(ola("Hello World!"));
?>
</p>
</p><h1>Funcao por valor</h1><p><?php
/*nesse caso a funcao que contem
a mesma variavel troca qd solicitada na funcao*/
  $a = 10;
  function troca(&$b){//O & representa passagem por ref
    $b += 100;
    return "$b";
  }
  echo troca($a)."<br>";
  echo "$a";
?>
</p>
<h3>Novidade Função</h3><p><?php
  function som(int ...$val){//declarando o tipo da var
    //tres pontos pra juntar todos valores da funcao
    return array_sum($val);
  }
 echo som(2,2)."<br>";
 echo som(520, 231)."<br>";


?>
