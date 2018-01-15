<?php

  $img = imagecreatefromjpeg("certificado.jpg");

  $cortitulo = imagecolorallocate($img, 0, 0, 0);
  $grey = imagecolorallocate($img, 100, 100, 100);

  imagestring($img, 5, 450, 150, "CERTIFICADO", $cortitulo);
  imagestring($img, 5, 440, 350, "RICKSON G OLIVEIRA", $cortitulo);
  imagestring($img, 5, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $cortitulo);

  header("Content-Type: image/jpeg");

  imagejpeg($img);

  imagedestroy($img);

 ?>
