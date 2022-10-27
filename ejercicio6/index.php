<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    $nombre_archivo = 'index.php';
    echo "Última actualización del archivo $nombre_archivo: "
    . date("l, dS F, Y, H:i:s a", fileatime($nombre_archivo));
    ?>
    
</body>
</html>