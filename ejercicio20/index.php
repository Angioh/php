<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    <?php
        $aleatiorio= rand(1,10);
        echo $aleatiorio;
        echo '<br>';
        function esPrimo($numero)
{
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0 ) {
        
            return 'No es primo';
        }

    }
    return 'Es primo';
}

echo esPrimo($aleatiorio);
    ?>
</body>
</html>