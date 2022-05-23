<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('configHead.php')
    ?>

    <title>Document</title>
</head>
<body>
    <?php
        $letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        $mezcla1 = rand(0, 25);
        $mezcla2 = rand(0, 25);
        $mezcla3 = rand(0, 25);
        $mezcla4 = rand(0, 25);
        $numero = rand(0,9);

        $_SESSION['captcha'] = $letras[$mezcla1] . $letras[$mezcla2] . $numero . $letras[$mezcla3] . $letras[$mezcla4];
        echo $_SESSION['captcha'];
    ?>
    </form>
    </body>
</html>