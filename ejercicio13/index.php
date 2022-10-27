<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
    $fecha = date_create('2012-12-21');

    echo $fecha->format('Y-m-d');
    date_add($fecha, date_interval_create_from_date_string("1 month"));
    echo " => ";
    echo $fecha->format('Y-m-d');
   
   
    
    ?>
</body>
</html>