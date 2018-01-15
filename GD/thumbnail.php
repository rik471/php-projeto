<?php

  header("Content-Type: image/jpeg");

  $file = "wallpaper.jpg";

  $new_largura = 256;
  $new_altura = 256;

  list($old_largura, $old_altura) = getimagesize($file);

  $new_image = imagecreatetruecolor($new_largura, $new_altura);
  $old_image = imagecreatefromjpeg($file);

  imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_largura, $new_altura, $old_largura, $old_altura);

  imagejpeg($new_image);

  imagedestroy($old_image);
  imagedestroy($new_image);

 ?>
