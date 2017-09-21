<p><h1>Exemplo 06 <br><br></h1><?php
//operadores de atribuições
  $t = "essa bosta mais..";
  $t .= "essa bosta<br>";//recebe seu valor mais string
  echo $t. "<br><br>";
 ?></p>

<p><h1>Exemplo 07 <br><br></h1><?php
  $valor = 60;
  // $valor *= .3;//recebe seu valor vezes igual
  echo "$valor";
?></p>
<p><h1>Exemplo 08 <br><br></h1><?php
$b = 4;
//operadores aritimeticos
  echo $valor - $b."<br>";
  echo $valor + $b. "<br>";
  echo $valor / $b."<br>";
  echo $valor * $b."<br>";
  echo $valor % $b."<br>";
?></p>

<p><h1>Exemplo 09 <br><br></h1><?php
  var_dump($valor > $b);
  echo "<br>";
  var_dump($valor < $b);
  echo "<br>";
  var_dump($valor = $b);//Um "=" siginifica atriubição
  echo "<br>";
  var_dump($valor == $b);//comparação
  echo "<br>";
  var_dump($valor === $b);//igualdade de identidades
  echo "<br>";
?></p>

<p><h1>Exemplo 10 <br><br></h1><?php
  var_dump($valor <=> $b);/* Spaceship, se a primeira var for maior que
  a segunda retornara 1, se a primeira var for igual a segunda retornara 0,
  e se a primeira var for menor que a segunda retornará -1.
  Como eu igualei as variaveis no exemplo 09, o echo desse var_dump sera 'int(0)'. */
?></p>
<p><h1>Exemplo 11 <br><br></h1><?php
  $a = NULL;

  $c = 132;

  $ac = 20;
  echo $a ?? $c ?? $ac;// ?? siginifca, se nao existir de eco na proxima.
?></p>
<p><h1>Exemplo 12 <br><br></h1><?php
//incremento de variavel mais um
  while ($ac < 40) {
    echo ++$ac."&nbsp";
  }
  echo "<br><br><br>";

  while ($ac > 1) {
    echo --$ac."&nbsp";
  }

?></p>
