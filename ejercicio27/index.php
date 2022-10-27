<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>

<body>
    <?php
        
        $sumaPares = 0;
        $productoImpares = 1;
    for ($i=1; $i <=20; $i++){
        $aleatiorio = rand(1,200);
        if($aleatiorio%2==0){
            echo 'pares '.$aleatiorio;
            echo '<br>';
            $sumaPares+=$aleatiorio;
        }
        else{
            echo 'impares '.$aleatiorio;
            echo '<br>';
            $productoImpares *=$aleatiorio;
        }
    }
        echo 'La suma de los pares es: '.$sumaPares;
        echo '<br>';
        echo 'El producto de los impares es: '.$productoImpares;
    ?>
</body>

</html>