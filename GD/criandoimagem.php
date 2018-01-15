<?php

  header("Content-Type: image/png");
//criando imagem com imagecreate(), configura com largura e tamanho
  $img = imagecreate(256, 256);

//setando cores, minimo de 0 com maximo de 255, padrao rgb, red green blue
  $black = imagecolorallocate($img, 0, 0, 0);
  $red = imagecolorallocate($img, 255, 0, 0);

//fazendo aparecer na tela, primeiro tamnaho da fonte com maximo de 5
//apos o tamanho setando o eixo x e y sendo x horizontal e y vertical
//texto que aparecera e cor do texto
imagestring($img, 5, 60, 120, "The Force is Strong", $red);

//determinando a imagem com formato png
imagepng($img);

//fechando o arquivo da imagem
imagedestroy($img);
 ?>
