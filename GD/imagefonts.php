<?php
//criando certificado
$img = imagecreatefromjpeg("certificado.jpg");

$cortitulo = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img, 100, 100, 100);

imagettftext($img, 32, 0, 320, 250, $cortitulo, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICATE");
imagettftext($img, 32, 0, 300, 350, $cortitulo, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "RICKSON G OLIVEIRA");
imagestring($img, 5, 440, 370, "Concluded in: ".date("d/m/Y"), $cortitulo);

header("Content-Type: image/jpeg");

imagejpeg($img);

imagedestroy($img);
?>
