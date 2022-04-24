<?php
    session_start();
    header("Content-type: image/jpeg");
    $codigo = $_SESSION['codigo_captcha'];
    
    $imagen_captcha = imagecreate(70,30);
    $fondo = imagecolorallocate($imagen_captcha, 22, 150, 71);
    $color = imagecolorallocate($imagen_captcha, 82,1,36);
    imagestring($imagen_captcha, 15, 15, 5, $codigo, $color);

    imagejpeg($imagen_captcha);

?>