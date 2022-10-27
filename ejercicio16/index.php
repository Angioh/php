<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php
    $num1 = rand();
    $num2  = rand();
    $num3  = rand();
    $num4  = rand();
   
    if(max($num1, $num2, $num3, $num4)%2==0){
        echo max($num1, $num2, $num3, $num4);
        echo ' ==> Es par';
    }
    else{
        echo max($num1, $num2, $num3, $num4);
        echo ' ==> Es impar';
    }
   
   
    
    ?>
</body>
</html>