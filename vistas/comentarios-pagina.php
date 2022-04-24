<?php 
    $archivo = fopen('files\comentarios\comentario-web.txt','r');

    $texto = fread($archivo, filesize('files\comentarios\comentario-web.txt'));

    echo $texto;
?>