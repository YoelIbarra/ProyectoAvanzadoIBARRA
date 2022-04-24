<?php
    $fechahora = date('m-d-Y h:i:s a', time());  
    $subtitulo = "<h3>La fecha y hora del comentario es ".$fechahora ."</h2>";
    
    $comentario = "<h5>".$_POST['comentario']."</h5>";
    $archivo;
    if($_POST['seleccion']="pag"){
        $archivo = fopen('files/comentarios/comentario-web.txt','a');
    }else{
        $archivo = fopen('files/comentarios/comentario-otro.txt','a');
    }
    
    fputs($archivo, $subtitulo);
    fputs($archivo, $comentario);
    
    fclose($archivo);
    
    header("location: comentario.php?m=ok");
?>