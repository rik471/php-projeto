<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 style="text-align: center">Laços</h1>
    <p><?php
      //estrutura if
      $myage = 20;
      $kid = 12;
      $legal = 18;
      $adult = 65;
      if ($myage < $kid) {
        echo "Criança";
      }elseif ($myage > $legal && $myage < $adult) {
        echo "Vc ja é maior de idade";
      }elseif ($myage < $adult) {
        echo "Vc ja é adulto";
      }else {
        echo "Vc ja é idoso<br><br>";
      }
     ?></p>
     <p><h1>Usando Alternario</h1><?php
        //ternario, testa uma condição de forma rapida
        $salario = 1200;
        $conta = 800;

        echo ($conta > $salario)?"Vamo gastar dinheiro<br>":"Vamos economizar<br>";
      ?></p>

      <p><h1>Switch Case</h1><?php
        $week = date("w");

        switch ($week) {
          case 0:
            echo "Domingo pé de cachimbo";
            break;
          case 1:
            echo "Segunda-Feira, vai trabalhar";
            break;
          case 2:
            echo "Terça-Feira, hoje tem aula!";
            break;
          case 3:
            echo "Quarta-Feira, trabalha mais!";
            break;
          case 4:
            echo "Quinta-Feira, não esquece da reunião";
            break;
          case 5:
            echo "Sexta-Feira, I'm in Love!";
            break;
          case 6:
            echo "Sábado, dia de fazer maldades";
            break;
          default:
            echo "O mundo provavelmente acabaou se nao existem mais dias da semana";
            break;
        }
      ?></p>
      <p><h1>For, Foreach</h1><?php
        echo "<h3>Tabuada do 5 usando o FOR</h3><br>";
        for ($i = 0; $i < 10 ; $i++) {
          $num = 5;
          $res = $num * $i;
          echo "$num x $i = $res<br>";
        }
        echo "<h1>Testando pular os numeros</h1><br>";
        for ($i=0; $i < 100 ; $i+=5) {
          if ($i > 25 && $i < 35)continue;
          if ($i == 85)break;
          echo "$i<br>";
        }
      ?></p>
      <p><h1>Select Year</h1><?php
        echo '<select>';
        for ($i = date("Y"); $i >= date("Y") - 20 ; $i--) {
          echo "<option value =".$i.">".$i."</option>";
        }
        echo '</select>';
      ?></p>
      <p><h1>Busca por Índice</h1><?php
        $mes = array("1","2","3","4","5","6","7","8","9");
          foreach ($mes as $key => $num) {
            echo "Indice $key:</br>";
            echo "Número: $num</br>";
          }
      ?></p>
      <form>
        <input type="text" name="nome">
        <input type="date" name="nasc">
        <input type="submit" value="Go!">
      </form>
      <?php
      if(isset($_GET)){

          foreach ($_GET as $key => $nasc) {
            echo "Campo: $key<br>Valor: $nasc<br>";
            }
        }
      ?>
      <p><h1>While and Do while</h1> <?php
        $achou = true;
        while ($achou) {
          $contador = rand(1, 100);

          if ($contador > 50 && $contador < 60) {
            echo "Achou numero $contador !!!<br>";
            $achou = false;
          }
        }
        do {
          $contador /= 10000;
          echo "Quem é o gatão<br>";
        } while ($contador > 50);
        echo "$contador";
      ?></p>
  </body>
</html>
