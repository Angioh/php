<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>

<body>
    <?php
    $numeros = 0;

    for ($i=1; $i <= 100; $i++){
       if($i%3==0){
        echo $i;
        echo '<br>';
       }
    }
    
    ?>
</body>

</html>