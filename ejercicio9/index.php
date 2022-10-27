<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    $fecha = date_create('now');

    echo 'Cambio de formato de la fecha<br>';
    echo date_format($fecha, 'Y-m-d').'<br>';
    echo date_format($fecha, 'd-m-Y');
    ?>
</body>
</html>