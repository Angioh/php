<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>
<body>
    <?php
    $horaActual = new DateTime();
    echo $horaActual->format('h:i:s ; ');
    echo 'Hora dentro de 10": ';
    $horaActual-> modify('+10 seconds');
    echo $horaActual->format('h:i:s');
    ?>
</body>
</html>