<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <?php
    echo (isset($_SERVER['HTTPS']))? 'LLamada desde https.': 'Llamada desde http.';
    ?>
</body>
</html>