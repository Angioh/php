<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
    $fecha1 = date_create('now');
    $fecha2 = date_create("2021-07-27");
    $diferencia = date_diff($fecha1, $fecha2);
    echo 'La diferencia entre '.date_format($fecha1, 'Y-m-d');
    echo ' y '.date_format($fecha2, 'Y-m-d');
    echo  $diferencia->format(' es: %y años, %m meses, %d días');
    ?>
</body>
</html>