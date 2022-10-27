<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $mesNumero = 12;
    $mesLetras = date("F",mktime(0,0,0,$mesNumero,10));

    echo "El mes $mesNumero en letras es: $mesLetras";

    ?>
    
</body>
</html>