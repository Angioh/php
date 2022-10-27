<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 26</title>
</head>

<body>
    <?php
        
        $acumulador = 0;
    for ($i=1; $i <=10; $i++){
        $aleatiorio = rand();
        echo $aleatiorio;
        echo '<br>';
        $acumulador += $aleatiorio;
    }
        $acumulador = $acumulador/10;
        echo 'La media de los 10 números aleatorios es: ';
        echo round ($acumulador,2);
    ?>
</body>

</html>