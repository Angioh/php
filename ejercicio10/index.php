<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
    $fecha = date_create('2008-02-23');
    
    echo 'Fecha: ';
    echo $fecha->format('Y-m-d');
    $fecha->modify('first day of this month');
    echo ' => Primer día: ';
    echo $fecha->format('Y-m-d');
    $fecha->modify('last day of this month');
    echo ' - Último día: ';
    echo $fecha->format('Y-m-d<br>');

    ?>
</body>
</html>