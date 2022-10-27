<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
    $fecha1 = date_create('now');
    $fecha2 = $_POST['fecha2'];
    $fechadif = date_create($fecha2);
    $diferencia = date_diff($fecha1, $fechadif);

    echo $diferencia->format('Faltan %y años, %m meses, %d días, %h horas, %i minutos, %s segundos para el cumpleaños');
    ?>
</body>
</html>