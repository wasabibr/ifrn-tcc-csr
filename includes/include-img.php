<?php

header ("Content-type: img");
$imagem = imagecreatefromjpeg("bfuture.jpeg");




header("Content-type: image/jpeg");
$myImage = imagecreatefromjpeg('./img/bfuture.jpeg');
imagejpeg($myImage);

?>