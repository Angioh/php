<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php
    $fechaActual = date('Y-m-d');
    $anioActual = date('Y');
    $mesActual = date('m');
    $diasMes = cal_days_in_month(CAL_GREGORIAN,$mesActual,$anioActual);
    echo 'El número de días del mes de '.date("F", strtotime($fechaActual)).
    ' son: '.$diasMes;
   
   
    
    ?>
</body>
</html>