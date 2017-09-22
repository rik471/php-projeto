<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<p><h1>Exemplo 13 <br><br></h1><?php
 $nome = "Meu nome não é jhonny";
 //diferença entre aspas duplas e simples
 echo "variavel $nome normais<br>";
 echo 'variavel $nome com aspas simples<br>';
?></p>

<p><h1>Exemplo 14 <br><br></h1><?php
  //uppercase e lowercase
  echo strtoupper($nome."<br>");//para todas letras maiusculas
  echo strtolower($nome."<br>");//para minusculas
  echo ucwords($nome."<br>");// As primeiras letra de cada palavra maisucula
  echo ucfirst($nome."<br><br>");//Apnas a primeira letra ficara maiuscula
?></p>

<p><h1>Exemplo 13 <br><br></h1><?php
 $nome = "Meu nome não é jhonny";
 //diferença entre aspas duplas e simples
 echo "variavel $nome normais<br>";
 echo 'variavel $nome com aspas simples<br>';
?></p>

<p><h1>Exemplo 15 <br><br></h1><?php
  $nome = str_replace(e/*orginal*/, 3/*sera trocado*/, $nome/*onde trocara*/);
  echo "$nome";
?></p>

<p><h1>Exemplo 15 <br><br></h1><?php
  $frase = "Tear up rules, make the most of a millions times no.";

  $ff = "the";

  $f = strpos($frase, $ff);//strposition mostra  a posicao de uma string

  $f2 = substr($frase/*var de string*/, 0/*pos incial*/, $f/*pos parada*/);//mostra do inicio ate o momento indicado

  var_dump($f2."<br>");

$f3 = substr($frase, $ff + strlen($f2)/*pos inicial*/, strlen($frase)/*pos parada*/);//pega da string indicada até o final do texto, strlen indica o numero de carac da string

  var_dump($f3."<br>");
  var_dump($f."<br>");
?></p>

</body>
</html>
