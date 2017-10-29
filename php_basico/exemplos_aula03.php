<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<p><?php
  setlocale(LC_ALL,"pt_BR.UTF-8" );
  echo setlocale(LC_ALL, 0);

 ?><h1>Exemplo 13 <br><br></h1><?php
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

<p><h1>Exemplo 16 <br><br></h1><?php
  $frase = "Tear up rules, make the most of a millions times no.";

  $ff = "the";

  $f = strpos($frase, $ff);//strposition mostra  a posicao de uma string

  $f2 = substr($frase/*var de string*/, 0/*pos incial*/, $f/*pos parada*/);//mostra do inicio ate o momento indicado

  var_dump($f2."<br>");

$f3 = substr($frase, $ff + strlen($f2)/*pos inicial*/, strlen($frase)/*pos parada*/);//pega da string indicada até o final do texto, strlen indica o numero de carac da string

  var_dump($f3."<br>");
  var_dump($f."<br>");
?></p>

<p style="width: 100%"><h1>Exemplo 17 <br><br></h1><?php
  //include "include.php"; //include nao importa se o arq funciona, e ele busca o mesmo arq em um banco de dados se existir
  //require "include.php"; //require apenas roda o arq se o mesmo funcionar corretamente
  require_once "include.php"; //require_once chama apenas uma vez o arq no codigo, pra nao haver perigos de o mesmo ser solicitado duas vezes

  $res = pares();
  echo $res."&nbsp";
?></p>
</body>
</html>
